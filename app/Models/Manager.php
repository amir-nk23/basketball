<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

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
}
