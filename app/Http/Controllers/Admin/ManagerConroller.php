<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MangerStoreFormRequest;
use App\Http\Requests\MangerUpdateFormRequest;
use App\Models\Manager;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ManagerConroller extends Controller
{
    public function index()
    {

        $managers = Manager::query()->select('id','fullname','national_code','mobile','team_name')->with('players')->get();
        $title = 'حذف سرپرست';
        $text = "ایا نسبت به حذف این سرپرست اطمینان دارید ؟";
        confirmDelete($title, $text);

        return view('admin.manager.index',compact('managers'));

    }


    public function store(MangerStoreFormRequest $request)
    {

        Manager::query()->create($request->only('fullname','national_code','mobile','team_name','password'));

        Alert::success('سرپرست ثبت شد');


        return redirect()->back();
    }

    public function show(Manager $manager)
    {

        $players = $manager->players()->get();

        return view('admin.manager.show',compact('players'));
    }

    public function update(MangerUpdateFormRequest $request, Manager $manager)
    {

        $manager->update($request->only('fullname','national_code','mobile','team_name'));

        Alert::info('سرپرست ویرایش شد');


        return redirect()->back();

    }

    public function destroy(Manager $manager)
    {
        // TODO delete condition

        $manager->delete();
        return redirect()->back();

    }
}
