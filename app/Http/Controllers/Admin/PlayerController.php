<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Manager::query()->select('id','fullname','team_name','national_code')->with('players')->get();

        return view('admin.player.index',compact('players'));
    }
}
