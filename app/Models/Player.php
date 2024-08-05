<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [

        'fullname',
        'ex_team',
        'national_code',
        'number',
        'player_image',
        'card_image',
        'manager_id',


    ];
    use HasFactory;
}
