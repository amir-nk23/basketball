@include('layouts.user.header')

@include('sweetalert::alert')


<div class="page">
    <div class="page-main">

{{--        <!--aside open-->--}}
{{--        @include('layouts.user.aside')--}}
{{--        <!--aside closed-->--}}

        <div class="app-content">


                <!--app header-->
                <div class="app-header header">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a class="header-brand" href="index.html">
                                <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-lgo"
                                     alt="Dayonelogo">
                                <img src="../../assets/images/brand/logo-white.png" class="header-brand-img dark-logo"
                                     alt="Dayonelogo">
                                <img src="../../assets/images/brand/favicon.png" class="header-brand-img mobile-logo"
                                     alt="Dayonelogo">
                                <img src="../../assets/images/brand/favicon1.png"
                                     class="header-brand-img darkmobile-logo" alt="Dayonelogo">
                            </a>
{{--                            <div class="app-sidebar__toggle" data-toggle="sidebar">--}}
{{--                                <a class="open-toggle" href="#">--}}
{{--                                    <i class="feather feather-menu"></i>--}}
{{--                                </a>--}}
{{--                                <a class="close-toggle" href="#">--}}
{{--                                    <i class="feather feather-x"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div class="mt-0">
                                <form class="form-inline">
                                    <div class="search-element">
                                        <input type="search" class="form-control header-search" placeholder="Search…"
                                               aria-label="Search" tabindex="1">
                                        <button class="btn btn-primary-color">
                                            <i class="feather feather-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div><!-- SEARCH -->
                            <div class="d-flex order-lg-2 my-auto mr-auto">
                                <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#"
                                   data-toggle="search">
                                    <i class="feather feather-search search-icon header-icon"></i>
                                </a>
                                <div class="dropdown header-fullscreen">
                                    <a class="nav-link icon full-screen-link">
                                        <i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
                                        <i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                    </a>
                                </div>
                                <div class="dropdown header-message">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="feather feather-mail header-icon"></i>
                                        <span class="badge badge-success side-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow  animated">
                                        <div class="header-dropdown-list message-menu" id="message-menu">
                                            <a class="dropdown-item border-bottom" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <span class="avatar avatar-md brround align-self-center cover-image"
                                                              data-image-src="../../assets/images/users/1.jpg"></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="pl-3">
                                                            <h6 class="mb-1">Jack Wright</h6>
                                                            <p class="fs-13 mb-1">All the best your template awesome</p>
                                                            <div class="small text-muted">
                                                                3 hours ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item border-bottom" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <span class="avatar avatar-md brround align-self-center cover-image"
                                                              data-image-src="../../assets/images/users/2.jpg"></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="pl-3">
                                                            <h6 class="mb-1">Lisa Rutherford</h6>
                                                            <p class="fs-13 mb-1">Hey! there I'm available</p>
                                                            <div class="small text-muted">
                                                                5 hour ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item border-bottom" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <span class="avatar avatar-md brround align-self-center cover-image"
                                                              data-image-src="../../assets/images/users/3.jpg"></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="pl-3">
                                                            <h6 class="mb-1">Blake Walker</h6>
                                                            <p class="fs-13 mb-1">Just created a new blog post</p>
                                                            <div class="small text-muted">
                                                                45 mintues ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item border-bottom" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <span class="avatar avatar-md brround align-self-center cover-image"
                                                              data-image-src="../../assets/images/users/4.jpg"></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="pl-3">
                                                            <h6 class="mb-1">Fiona Morrison</h6>
                                                            <p class="fs-13 mb-1">Added new comment on your photo</p>
                                                            <div class="small text-muted">
                                                                2 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item border-bottom" href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <span class="avatar avatar-md brround align-self-center cover-image"
                                                              data-image-src="../../assets/images/users/6.jpg"></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="pl-3">
                                                            <h6 class="mb-1">Stewart Bond</h6>
                                                            <p class="fs-13 mb-1">Your payment invoice is generated</p>
                                                            <div class="small text-muted">
                                                                3 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=" text-center p-2">
                                            <a href="#" class="">See All Messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown header-notify">
                                    <a class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                        <i class="feather feather-bell header-icon"></i>
                                        <span class="bg-dot"></span>
                                    </a>
                                </div>
                                <div class="dropdown profile-dropdown">
                                    <a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="../../assets/images/users/16.jpg" alt="img"
                                                         class="avatar avatar-md bradius">
												</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow animated">
                                        <div class="p-3 text-center border-bottom">
                                            <a href="#" class="text-center user pb-0 font-weight-bold">John Thomson</a>
                                            <p class="text-center user-semi-title">App Developer</p>
                                        </div>
                                        <a class="dropdown-item d-flex" href="#">
                                            <i class="feather feather-user ml-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Profile</div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <i class="feather feather-settings ml-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Settings</div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">
                                            <i class="feather feather-mail ml-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Messages</div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#" data-toggle="modal"
                                           data-target="#changepasswordnmodal">
                                            <i class="feather feather-edit-2 ml-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Change Password</div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="{{route('user.logout')}}">
                                            <i class="feather feather-power ml-3 fs-16 my-auto"></i>
                                            <div class="mt-1">Sign Out</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/app header-->



        </div><!-- end app-content-->

        <!-- Row-->

        <div class="container-fluid col-xs-12 mt-5">
            @yield('content')
        </div>
        <!-- End Row-->

    </div>

    <!--Footer-->
    <!--			<footer class="footer">-->
    <!--				<div class="container">-->
    <!--					<div class="row align-items-center flex-row-reverse">-->
    <!--						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">-->
    <!--							Copyright © 2021 <a href="#">Dayone</a>. Designed by <a href="#">Spruko Technologies Pvt.Ltd</a> All rights reserved.-->
    <!--						</div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</footer>-->
    <!-- End Footer-->

    <!--Sidebar-right-->
    @include('layouts.user.sidebar')
    <!--/Sidebar-right-->

    <!--Change password Modal -->
    <!--			<div class="modal fade"  id="changepasswordnmodal">-->
    <!--				<div class="modal-dialog" role="document">-->
    <!--					<div class="modal-content">-->
    <!--						<div class="modal-header">-->
    <!--							<h5 class="modal-title">Change Password</h5>-->
    <!--							<button  class="close" data-dismiss="modal" aria-label="Close">-->
    <!--								<span aria-hidden="true">×</span>-->
    <!--							</button>-->
    <!--						</div>-->
    <!--						<div class="modal-body">-->
    <!--							<div class="form-group">-->
    <!--								<label class="form-label">New Password</label>-->
    <!--								<input type="password" class="form-control" placeholder="password" value="">-->
    <!--							</div>-->
    <!--							<div class="form-group">-->
    <!--								<label class="form-label">Confirm New Password</label>-->
    <!--								<input type="password" class="form-control" placeholder="password" value="">-->
    <!--							</div>-->
    <!--						</div>-->
    <!--						<div class="modal-footer">-->
    <!--							<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>-->
    <!--							<a href="#" class="btn btn-primary">Confirm</a>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!-- End Change password Modal  -->

</div>

@include('layouts.user.footer')

