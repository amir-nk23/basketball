<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlayerStoreFormRequest;
use App\Http\Requests\PlayerUpdateFormRequest;
use App\Models\Player;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PlayerController extends Controller
{
    protected $cardImage = null;
    protected $playerImage = null;

    public function index()
    {

        $players = Player::query()->where('manager_id',Auth::id())->select('id','fullname','team','national_code','number','player_image','card_image','birth_date','role_id')->get();
        $roles = Role::query()->get();
        $title = 'حذف بازیکن';
        $text = "ایا نسبت به حذف این بازیکن اطمینان دارید ؟";
        confirmDelete($title, $text);
        return view('user.player',compact('players','roles'));
    }

    public function store(PlayerStoreFormRequest $request)
    {

        $playerImage = 'storage/'.Storage::disk('public')->put('players',$request->file('playerImage'));
        $request->cardImage ? $this->cardImage = 'storage/'.Storage::disk('public')->put('cards',$request->file('cardImage')) : $this->cardImage = null ;
        Player::query()->create([

            'fullname'=>$request->fullname,
            'team'=>$request->team,
            'national_code'=>$request->nationalCode,
            'birth_date' => $request->birth_date,
            'number'=>$request->number,
            'player_image'=>$playerImage,
            'card_image'=>$this->cardImage,
            'role_id' => $request->role_id,
            'manager_id'=>Auth::id(),

        ]);


        Alert::success('بازیکن ثبت شد');

        return redirect()->back();

    }

    public function update(PlayerUpdateFormRequest $request,Player $player)
    {

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
            'team'=>$request->team,
            'national_code'=>$request->nationalCode,
            'birth_date' => $request->birth_date,
            'role_id'=>$request->role_id,
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
