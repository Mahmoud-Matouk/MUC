<?php

namespace App\Models;

use App\Enums\Gender;
use Spatie\Activitylog\LogOptions;
use Spatie\EloquentSortable\Sortable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\EloquentSortable\SortableTrait;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\CausesActivity;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Translation\HasLocalePreference;

class User extends Authenticatable implements FilamentUser, HasAvatar, HasLocalePreference, Sortable
{
    use CausesActivity;
    use HasFactory;
    use HasRoles;
    use HasUlids;
    use LogsActivity;
    use Notifiable;
    use SoftDeletes;
    use SortableTrait;
    use UserAccess;
    use UserActions;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'gender' => Gender::class,
        ];
    }

    protected $hidden = ['password', 'remember_token'];

    public function getFilamentAvatarUrl(): ?string
    {
        return Storage::url($this->avatar);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnlyDirty()
            ->logOnly(['*']);
    }

    public function preferredLocale(): string
    {
        return $this->locale;
    }

    public function receivesBroadcastNotificationsOn(): string
    {
        return "user.$this->id";
    }

    public function scopeActive(Builder $builder, $active = true): Builder
    {
        return $builder->where(column: 'active', operator: '=', value: $active);
    }

    public function scopeSuper(Builder $builder, $super = true): Builder
    {
        if ($super) {
            return $builder->whereIn('username', config(key: 'app.super'));
        } else {
            return $builder->whereNotIn('username', config(key: 'app.super'));
        }
    }

    public function isSuper(): bool
    {
        return in_array(
            needle: $this->username,
            haystack: config(key: 'app.super'),
            strict: true
        );
    }

    public function hasPassword(): bool
    {
        return (bool) $this->password;
    }

    public function scopeFindByEmailOrMobile(
        Builder $builder,
        ?string $email = null,
        ?string $mobile = null,
        ?string $mobile_code = '966'
    ): Builder {
        $full_mobile = full_mobile(mobile: $mobile, mobile_code: $mobile_code);

        return $builder->where(column: function (Builder $builder) use ($email) {
            return $builder->when(value: $email, callback: function (Builder $builder) use ($email) {
                return $builder->whereNotNull(columns: 'email')
                    ->where(column: 'email', operator: '=', value: $email);
            });
        })
            ->orWhere(column: function (Builder $builder) use ($full_mobile) {
                return $builder->when(value: $full_mobile, callback: function (
                    Builder $builder
                ) use ($full_mobile) {
                    return $builder->whereNotNull(columns: 'mobile')
                        ->where(column: 'mobile', operator: '=', value: $full_mobile);
                });
            });
    }

    public function scopeFindForLogin(
        Builder $builder,
        string $identifier,
        ?string $mobile_code
    ): Builder {
        $mobile = full_mobile(mobile: $identifier, mobile_code: $mobile_code);

        return $builder->whereNotNull(columns: 'password')
            ->where(column: function (Builder $builder) use ($identifier) {
                $builder->whereNotNull(columns: 'email')
                    ->where(column: 'email', operator: '=', value: $identifier);
            })
            ->orWhere(column: function (Builder $builder) use ($identifier) {
                $builder->whereNotNull(columns: 'username')
                    ->where(column: 'username', operator: '=', value: $identifier);
            })
            ->orWhere(column: function (Builder $builder) use ($mobile) {
                if (isset($mobile)) {
                    $builder->whereNotNull(columns: 'mobile')
                        ->where(column: 'mobile', operator: '=', value: $mobile);
                }
            });
    }
}
