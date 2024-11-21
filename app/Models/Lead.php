<?php

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;
    use HasUlids;
    use LeadActions;
    use SoftDeletes;
    use HasTranslations;

    protected function casts(): array
    {
        return [
            'status' => LeadStatus::class,

            'followed_at' => 'datetime',
            'deadline_at' => 'datetime',
            'done_at' => 'datetime',
            'closed_at' => 'datetime',
        ];
    }

    protected array $translatable = [
        
    ];

    protected static function booted(): void
    {
        static::created(function (Lead $lead) {
            $lead->actions()->create([
                'to_status' => LeadStatus::New,
                'comment' => __('lead.actions.lead_created'),
                'agent_id' => $lead->customer?->id,
            ]);
        });
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function actions(): HasMany
    {
        return $this->hasMany(LeadAction::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
