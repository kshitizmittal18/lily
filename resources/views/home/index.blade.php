@extends('layouts.app')
@section('header-name')
{{ 'My Lily' }}
@endsection


@section('content')
    <div class="page-content">
        <!-- My Services -->
        <div class="row">
            {{-- <div class="col-sm-12 col-md-12">
                <div class="block-title">
                    <h3>My <span>Lily</span></h3>
                </div>
            </div> --}}
            <div class="col-sm-6 col-md-4">
                <a class="pt-trigger" href="{{ route('home.profile') }}">
                    <div class="service-block">
                        <div class="service-info">
                            <!--<i class="service-icon fa fa-shopping-cart"></i>-->
                            <div class="service-image">
                                <img src="images/service/web_design_icon.png" alt="Responsive Design" class="mCS_img_loaded">
                            </div>
                            <h4>Profile</h4>
                            <p>Click Here to View Profile</p>
                        </div>
                    </div>
                </a>
            </div>
           
            <div class="col-sm-6 col-md-4">
                <a class="pt-trigger" href="#attendance">
                    <div class="service-block">
                        <div class="service-info">
                            <div class="service-image">
                                <img src="images/service/creativity_icon.png" alt="Creativity" class="mCS_img_loaded">
                            </div>
                            <h4>Attendance</h4>
                            <p>Click Here to View Attendance</p>
                        </div>
                    </div>
                </a>
            </div>   
             <div class="col-sm-6 col-md-4">
                <a href="{{ route('my_lily.timesheet') }}">
                    <div class="service-block">
                        <div class="service-info">
                            <div class="service-image">                                                
                                <img src="images/service/photography_icon.png" alt="Photography" class="mCS_img_loaded">
                            </div>
                            <h4>Time Sheet</h4>
                            <p>Click Here to View Time Sheet</p>
                        </div>
                    </div>
                </a>
            </div>                         
        </div>
        <!-- End of My Services --> 
    </div>
@endsection
