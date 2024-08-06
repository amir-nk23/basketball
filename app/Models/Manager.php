<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Manager extends Authenticatable
{

    protected $fillable = [

        'fullname',
        'password',
        'national_code',
        'mobile',
        'team_name',

    ];

    use HasFactory;

    public function players(): HasMany
    {

        return $this->hasMany(Player::class);

    }
}
