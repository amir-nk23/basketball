<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    protected $cardImage;

    public function index()
    {

        $players = Player::query()->select('id','fullname','ex_team','national_code','number','player_image','card_image',)->get();
        return view('user.dashboard',compact('players'));
    }

    public function store(Request $request)
    {

        $playerImage = 'storage/'.Storage::disk('public')->put('players',$request->file('playerImage'));

        $request->cardImage ? $this->cardImage = 'storage/'.Storage::disk('public')->put('cards',$request->file('cardImage')) : $this->cardImage = null ;

        Player::query()->create([

            'fullname'=>$request->fullname,
            'ex_team'=>$request->exTeam,
            'national_code'=>$request->nationalCode,
            'number'=>$request->number,
            'player_image'=>$playerImage,
            'card_image'=>$this->cardImage

        ]);

        Alert::success('بازیکن ثبت شد');

        return redirect()->back();

    }

    public function destroy($id)
    {
        $player = Player::query()->find($id);
        $player->delete();
        return redirect()->back();
    }

}
