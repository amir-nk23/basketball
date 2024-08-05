@extends('layouts.user.master')

@section('content')

    {{--  modal  --}}

    <div class="modal fade" id="modaldemo1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo p-3">


                <div class="row d-flex center-block">

                    <div>

                        <h1>ثبت بازیکن</h1>

                    </div>


                </div>

                <div class="border-bottom"></div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="mt-1" action="{{route('user.player.store')}}" enctype="multipart/form-data" method="post" >

                    @csrf
                    <div class="row">

                        <div class="form-group col-6">

                            <div class="d-flex">

                                <label>نام و نام خانوادگی :</label>
                                <div style="color: red" class="mr-auto">*</div>

                            </div>

                            <input class="form-control"  value="{{old('fullname')}}" name="fullname"></input>

                        </div>


                        <div class="form-group col-6">

                            <label>نام باشگاه قبلی :</label>
                            <input class="form-control" value="{{old('exTeam')}}" name="exTeam"></input>

                        </div>


                        <div class="form-group col-6">

                            <div class="d-flex">
                                <label>کد ملی :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>

                            <input class="form-control" value="{{old('nationalCode')}}" name="nationalCode"></input>

                        </div>


                        <div class="form-group col-6">


                            <div class="d-flex">
                                <label>شماره پیراهن :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>
                            <input class="form-control" value="{{old('number')}}"  name="number"></input>

                        </div>

                        <div class="form-group col-6">


                            <div class="d-flex">
                                <label>عکس بازیکن :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>
                            <input type="file" class="form-control"  name="playerImage"></input>

                        </div>

                        <div class="form-group col-6">

                            <label>عکس کارت ملی :</label>
                            <input type="file" class="form-control" name="cardImage"></input>

                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" style="">ثبت بازیکن</button> <button class="btn btn-danger" data-dismiss="modal">بستن</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{--end modal--}}
    <div class="card col-xs-10" style="margin-top: 40px">
        <div class="card-header  border-0">
            <h4 class="card-title">لیست بازیکنان - {{\Illuminate\Support\Facades\Auth::user()->team_name}}</h4>
            <div class="mr-auto">
                <div class="input-group">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex col-11">



                <div class="mr-auto">
                    <div>
                        <div class="form-group">
                            <a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">ثبت بازیکن جدید<i class="feather feather-plus"></i></a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="card-body">
            <div>
                <div id="task-list_wrapper" class="no-footer">
                    <div class="row"><div class="col-sm-12" style="height: 50VH">
                            <table class="table table-vcenter text-nowrap table-bordered border-bottom dataTable no-footer col-10 m-auto" id="task-list" role="grid" aria-describedby="task-list_info">
                                <thead>
                                <tr role="row"><th class="border-bottom-0 text-center sorting_disabled" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="No">ردیف</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="Task: activate to sort column ascending">نام و نام خانوادگی</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="Department: activate to sort column ascending">کد ملی</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="Assign To: activate to sort column ascending">شماره پیراهن</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 70.3167px;" aria-label="Priority: activate to sort column ascending">تیم قبل</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 70.3167px;" aria-label="Priority: activate to sort column ascending">عکس بازیکن</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 70.3167px;" aria-label="Priority: activate to sort column ascending">عکس کارت ملی</th>
                                    <th class="border-bottom-0 sorting"  tabindex="0" aria-controls="task-list"   style="width: 60.3167px;text-align: center" aria-label="Priority: activate to sort column ascending">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($players as $player)


                                    {{-- edit modal  --}}

                                    <div class="modal fade" id="modaledit-{{$player->id}}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo p-3">


                                                <div class="row d-flex center-block">

                                                    <div>

                                                        <h1>ویرایش بازیکن</h1>

                                                    </div>


                                                </div>

                                                <div class="border-bottom"></div>


                                                <form class="mt-1"  method="post" action="{{route('user.player.update',$player->id)}}" enctype="multipart/form-data"  >

                                                    @method('patch')
                                                    @csrf

                                                    <div class="row">

                                                        <div class="form-group col-6">

                                                            <div class="d-flex">

                                                                <label>نام و نام خانوادگی :</label>
                                                                <div style="color: red" class="mr-auto">*</div>

                                                            </div>

                                                            <input class="form-control" value="{{$player->fullname}}" name="fullname"></input>

                                                        </div>


                                                        <div class="form-group col-6">

                                                            <label>نام باشگاه قبلی :</label>
                                                            <input class="form-control" value="{{$player->ex_team}}" name="exTeam"></input>

                                                        </div>


                                                        <div class="form-group col-6">

                                                            <div class="d-flex">
                                                                <label>کد ملی :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>

                                                            <input class="form-control" value="{{$player->national_code}}" name="nationalCode"></input>

                                                        </div>


                                                        <div class="form-group col-6">


                                                            <div class="d-flex">
                                                                <label>شماره پیراهن :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>
                                                            <input class="form-control" value="{{$player->number}}" name="number"></input>

                                                        </div>

                                                        <div class="form-group col-6">


                                                            <div class="d-flex">
                                                                <label>عکس بازیکن :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>
                                                            <input type="file" class="form-control" name="playerImage"></input>

                                                        </div>

                                                        <div class="form-group col-6">

                                                            <label>عکس کارت ملی :</label>
                                                            <input type="file" class="form-control" name="cardImage"></input>

                                                        </div>


                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info" style="">ویرایش بازیکن</button> <button class="btn btn-danger" data-dismiss="modal">بستن</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    {{--end edit modal--}}


                                    {{--  player image  --}}

                                    <div class="modal fade" id="modalplayerimage" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo p-3">


                                                <figure>

                                                    <img src="{{asset($player->player_image)}}" alt="">

                                                </figure>

                                            </div>
                                        </div>
                                    </div>

                                    {{--end player modal--}}

                                    {{--  card image  --}}

                                    <div class="modal fade" id="modalcardimage" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo p-3">


                                                <figure>

                                                    <img src="{{asset($player->card_image)}}" alt="">

                                                </figure>

                                            </div>
                                        </div>
                                    </div>

                                    {{--end card modal--}}

                                    <tr role="row" class="even">
                                        <td class="text-center">{{$loop->index +1}}</td>
                                        <td>
                                            <a href="#" class="d-flex">
                                                <span>{{$player->fullname}}</span>
                                            </a>
                                        </td>
                                        <td>{{$player->national_code}}</td>
                                        <td>
                                            {{$player->number}}
                                        </td>
                                        <td>{{$player->ex_team}}</td>
                                        <td> <a href="" data-target="#modalplayerimage" data-toggle="modal" class="action-btns1"  data-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a></td>
                                        <td> <a href="" data-target="#modalcardimage" data-toggle="modal" class="action-btns1"  data-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="action-btns1" data-toggle="modal" data-target="#modaledit-{{$player->id}}">
                                                    <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit task"></i>
                                                </a>


                                                <a href="{{route('user.player.destroy',$player->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-confirm-delete="true" data-original-title="حذف بازیکن"><i class="feather feather-trash-2 text-danger"></i></a>


                                            </div>
                                        </td>
                                    </tr></tbody>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>


@endsection

