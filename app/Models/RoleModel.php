<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleModel extends SpatieRole
{
    use HasFactory;
    use HasUlids;

    public $table = 'roles';
}
