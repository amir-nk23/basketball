@extends('layouts.admin.master')

@section('content')

    <style>


        @media screen {
            #printSection {
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #printSection, #printSection * {
                visibility:visible;
            }
            #printSection {
                position:absolute;
                left:0;
                top:0;
            }
        }


    </style>


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
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#printModal">
                                                    <i class="feather feather-printer"></i>
                                                </button>


                                            </div>
                                        </td>
                                    </tr></tbody>


                                <div id="printThis">
                                    <div id="printModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal Content: begins -->
                                            <div class="modal-content ">


                                                <!-- Modal Body -->
                                                <div class="modal-body">

                                                    <div class="row d-flex">

                                                        <div class="col-5">

                                                            <figure>

                                                                <img src="{{asset('logo/logo2.jpg')}}" alt="">
                                                            </figure>

                                                            <div> هیاُت بسکتبال شهرستان گرگان</div>
                                                        </div>

                                                        <div>

                                                            <h5>مسابقات بسکتبال *********</h5>

                                                        </div>
                                                    </div>

                                                    <div class="d-flex">

                                                        <div class="col-3 mt-5 table">

                                                            <div class="p-0" style="border-style:solid">
                                                                <div style="border-bottom: 3px solid">نام باشکاه</div>
                                                                <div style="border-bottom: 3px solid">نام و نام خانوادگی</div>
                                                                <div style="border-bottom: 3px solid">کد ملی</div>
                                                                <div style="border-bottom: 3px solid">سمت</div>
                                                                <div style="border-bottom: 3px solid">شماره پیراهن</div>
                                                            </div>
                                                        </div>


                                                        <figure class="mr-auto">
                                                            <img width="200px" height="200px" src="{{asset($player->player_image)}}" alt="">
                                                        </figure>


                                                    </div>


                                                </div>
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <button id="btnPrint" type="button" class="btn btn-default">Print</button>
                                                </div>
                                                </div>

                                            </div>
                                            <!-- Modal Content: ends -->

                                        </div>
                                    </div>
                                </div>]
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>


                <script>

                    document.getElementById("btnPrint").onclick = function () {
                        printElement(document.getElementById("printThis"));
                    }

                    function printElement(elem) {
                        var domClone = elem.cloneNode(true);

                        var $printSection = document.getElementById("printSection");

                        if (!$printSection) {
                            var $printSection = document.createElement("div");
                            $printSection.id = "printSection";
                            document.body.appendChild($printSection);
                        }

                        $printSection.innerHTML = "";
                        $printSection.appendChild(domClone);
                        window.print();
                    }

                </script>

@endsection

