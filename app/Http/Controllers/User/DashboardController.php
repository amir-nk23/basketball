<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlayerStoreFormRequest;
use App\Http\Requests\PlayerUpdateFormRequest;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    protected $cardImage = null;
    protected $playerImage = null;

    public function index()
    {

        $players = Player::query()->select('id','fullname','ex_team','national_code','number','player_image','card_image',)->get();
        $title = 'حذف بازیکن';
        $text = "ایا نسبت به حذف این بازیکن اطمینان دارید ؟";
        confirmDelete($title, $text);
        return view('user.player',compact('players'));
    }

    public function store(PlayerStoreFormRequest $request)
    {

        $playerImage = 'storage/'.Storage::disk('public')->put('players',$request->file('playerImage'));

        $request->cardImage ? $this->cardImage = 'storage/'.Storage::disk('public')->put('cards',$request->file('cardImage')) : $this->cardImage = null ;

        Player::query()->create([

            'fullname'=>$request->fullname,
            'ex_team'=>$request->exTeam,
            'national_code'=>$request->nationalCode,
            'number'=>$request->number,
            'player_image'=>$playerImage,
            'card_image'=>$this->cardImage,
            'manager_id'=>Auth::id(),

        ]);

        Alert::success('بازیکن ثبت شد');

        return redirect()->back();

    }

    public function update(PlayerUpdateFormRequest $request,$id)
    {

        $player = Player::query()->find($id);

        $playerImage = $player->player_image;
        $cardImage = $player->card_image;
        if ($request->hasFile('playerImage')) {

            Storage::delete($player->player_image);
            $playerImage = 'storage/'.Storage::disk('public')->put('players',$request->file('playerImage'));
        }

        if ($request->hasFile('cardImage')) {

            Storage::delete($player->card_image);
            $cardImage = 'storage/'.Storage::disk('public')->put('cards',$request->file('cardImage'));

        }

        $player->update([

            'fullname'=>$request->fullname,
            'ex_team'=>$request->exTeam,
            'national_code'=>$request->nationalCode,
            'number'=>$request->number,
            'player_image'=>$playerImage,
            'card_image'=>$cardImage,
        ]);

        Alert::info('بازیکن ویرایش شد');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $player = Player::query()->find($id);
        $player->delete();
        return redirect()->back();
    }

}
