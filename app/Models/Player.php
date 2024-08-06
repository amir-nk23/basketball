<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [

        'fullname',
        'team',
        'national_code',
        'number',
        'player_image',
        'birth_date',
        'card_image',
        'manager_id',
        'role_id',


    ];
    use HasFactory;
}
