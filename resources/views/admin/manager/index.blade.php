@extends('layouts.admin.master')

@section('content')

    {{--  modal  --}}

    <div class="modal fade" id="modaldemo1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo p-3">


                <div class="row d-flex center-block">

                    <div>

                        <h1>ثبت سرپرست</h1>

                    </div>


                </div>

                <div class="border-bottom"></div>

                @if ($errors->any())

                    <template id="my-template">
                        <swal-title>
                           عملیات ثبت با مشکل مواجه شد
                        </swal-title>
                        <swal-icon type="warning" color="red"></swal-icon>
                        <swal-button type="confirm">
                                اوکی
                        </swal-button>
                    </template>
                    <script>

                        Swal.fire({
                            template: "#my-template"
                        });

                    </script>

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="mt-1" action="{{route('admin.manager.store')}}" enctype="multipart/form-data" method="post" >

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


                            <div class="d-flex">

                                <label>کد ملی :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>

                            <input class="form-control" value="{{old('national_code')}}" name="national_code"></input>
                        </div>


                        <div class="form-group col-6">

                            <div class="d-flex">
                                <label>شماره همراه :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>

                            <input class="form-control" value="{{old('mobile')}}" name="mobile"></input>

                        </div>


                        <div class="form-group col-6">


                            <div class="d-flex">
                                <label>اسم تیم :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>
                            <input class="form-control" value="{{old('team_name')}}"  name="team_name"></input>

                        </div>


                        <div class="form-group col-6">


                            <div class="d-flex">
                                <label>رمز عبور :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>
                            <input class="form-control"   type="password" name="password"></input>

                        </div>

                        <div class="form-group col-6">


                            <div class="d-flex">
                                <label>تکرار رمز عبور :</label>
                                <div style="color: red" class="mr-auto">*</div>
                            </div>
                            <input class="form-control"  type="password"  name="password_confirmation"></input>

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
            <h4 class="card-title">لیست سرپرستان</h4>
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
                            <a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">ثبت سرپرست جدید<i class="feather feather-plus"></i></a>
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
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="Department: activate to sort column ascending">شماره همراه</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 77.0833px;" aria-label="Assign To: activate to sort column ascending">کد ملی</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 70.3167px;" aria-label="Priority: activate to sort column ascending">اسم تیم</th>
                                    <th class="border-bottom-0 sorting" tabindex="0" aria-controls="task-list" rowspan="1" colspan="1" style="width: 70.3167px;" aria-label="Priority: activate to sort column ascending">تعداد بازیکن</th>
                                    <th class="border-bottom-0 sorting"  tabindex="0" aria-controls="task-list"   style="width: 60.3167px;text-align: center" aria-label="Priority: activate to sort column ascending">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($managers as $manager)


                                    <div class="modal fade" id="modaledit-{{$manager->id}}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-content-demo p-3">


                                                <div class="row d-flex center-block">

                                                    <div>

                                                        <h1>ویرایش سرپرست</h1>

                                                    </div>


                                                </div>

                                                <div class="border-bottom"></div>

                                                @if ($errors->any())

                                                    <template id="my-template">
                                                        <swal-title>
                                                            عملیات ثبت با مشکل مواجه شد
                                                        </swal-title>
                                                        <swal-icon type="warning" color="red"></swal-icon>
                                                        <swal-button type="confirm">
                                                            اوکی
                                                        </swal-button>
                                                    </template>
                                                    <script>

                                                        Swal.fire({
                                                            template: "#my-template"
                                                        });

                                                    </script>

                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form class="mt-1"  method="post" action="{{route('admin.manager.update',$manager->id)}}" enctype="multipart/form-data"  >

                                                    @method('patch')
                                                    @csrf

                                                    <div class="row">

                                                        <div class="form-group col-6">

                                                            <div class="d-flex">

                                                                <label>نام و نام خانوادگی :</label>
                                                                <div style="color: red" class="mr-auto">*</div>

                                                            </div>

                                                            <input class="form-control" value="{{$manager->fullname}}" name="fullname"></input>

                                                        </div>


                                                        <div class="form-group col-6">
                                                            <div class="d-flex">

                                                                <label>کد ملی :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>

                                                            <input class="form-control" value="{{$manager->national_code}}" name="national_code"></input>

                                                        </div>


                                                        <div class="form-group col-6">

                                                            <div class="d-flex">
                                                                <label>شماره همراه :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>

                                                            <input class="form-control" value="{{$manager->mobile}}" name="mobile"></input>

                                                        </div>


                                                        <div class="form-group col-6">


                                                            <div class="d-flex">
                                                                <label>اسم تیم :</label>
                                                                <div style="color: red" class="mr-auto">*</div>
                                                            </div>
                                                            <input class="form-control" value="{{$manager->team_name}}" name="team_name"></input>

                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info" style="">ویرایش بازیکن</button> <button class="btn btn-danger" data-dismiss="modal">بستن</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    end edit modal

                                    <tr role="row" class="even">
                                        <td class="text-center">{{$loop->index +1}}</td>
                                        <td>
                                            <a href="#" class="d-flex">
                                                <span>{{$manager->fullname}}</span>
                                            </a>
                                        </td>
                                        <td>{{$manager->mobile}}</td>
                                        <td>
                                            {{$manager->national_code}}
                                        </td>
                                        <td>{{$manager->team_name}}</td>
                                        <td>{{$manager->players->count()}}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="action-btns1" data-toggle="modal" data-target="#modaledit-{{$manager->id}}">
                                                    <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="ویرایش سرپرست"></i>
                                                </a>


                                                <a href="{{route('admin.manager.destroy',$manager->id)}}" class="action-btns1"  data-toggle="tooltip" data-placement="top" title="" data-confirm-delete="true" data-original-title="حذف سرپرست"><i class="feather feather-trash-2 text-danger"></i></a>

                                                @if($manager->players->count()>0)
                                                    <a href="{{route('admin.manager.show',$manager->id)}}" class="action-btns1">
                                                        <i class="feather feather-eye  text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="مشاهده بازیکنان"></i>
                                                    </a>
                                                @endif

                                            </div>
                                        </td>
                                    </tr></tbody>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>


@endsection


