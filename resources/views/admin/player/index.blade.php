@extends('layouts.admin.master')

@section('content')


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

