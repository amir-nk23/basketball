@include('layouts.admin.header')

@include('sweetalert::alert')


<div class="page">
    <div class="page-main">

        <!--aside open-->
        @include('layouts.admin.aside')
        <!--aside closed-->

        <div class="app-content main-content">
            <div class="side-app">

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
                            <div class="app-sidebar__toggle" data-toggle="sidebar">
                                <a class="open-toggle" href="#">
                                    <i class="feather feather-menu"></i>
                                </a>
                                <a class="close-toggle" href="#">
                                    <i class="feather feather-x"></i>
                                </a>
                            </div>
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

                                <div class="dropdown">
                                    <a class="nav-link icon bg-danger" href="{{route('admin.logout')}}">
                                        <i class="feather text-white feather-power header-icons"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/app header-->


                <!-- Row-->
                <div class="row">
                    @yield('content')
                </div>
                <!-- End Row-->

            </div>
        </div><!-- end app-content-->
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
    @include('layouts.admin.sidebar')
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

@include('layouts.admin.footer')


