@extends('layouts.app')
@section('styles')
@endsection

@section('header-name')
{{ 'Admin' }}
@endsection
@section('content')
<!-- Blog Posts Grid -->
<div class="blog-masonry two-columns">
    <div class="item">
        <a href="{{ route('user.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-1" class="post-image img-responsive" src="{{ asset('images/user.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        User
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 1 -->
    <!-- Blog Post 2 -->
    <div class="item">
        <a href="{{ route('department.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-2" class="post-image img-responsive" src="{{ asset('images/department.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Department
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 2 -->
    <!-- Blog Post 3 -->
    <div class="item">
        <a href="{{ route('designation.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-3" class="post-image img-responsive" src="{{ asset('images/designation.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Designation
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 3 -->
    <!-- Blog Post 4 -->
    <div class="item">
        <a href="{{ route('location.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-4" class="post-image img-responsive" src="{{ asset('images/location.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Office Locations
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 4 -->
    <!-- Blog Post 5 -->
    <div class="item">
        <a href="{{ route('holiday_calendar.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-4" class="post-image img-responsive" src="{{ asset('images/calendar.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Holiday Calendar
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 5 -->
    <!-- Blog Post 6 -->
    <div class="item">
        <div class="blog-card">
            <div class="media-block">
                <a href="blog-post-1.html">
                    <img alt="blog-post-4" class="post-image img-responsive" src="{{ asset('images/timesheet.png') }}"/>
                    <div class="mask">
                    </div>
                </a>
            </div>
            <div class="post-info">
                <a href="blog-post-1.html">
                    <h4 class="blog-item-title">
                        Time sheet
                    </h4>
                </a>
            </div>
        </div>
    </div>
    <!-- End of Blog Post 6 -->
    <!-- Blog Post 7 -->
    <div class="item">
        <a href="{{ route('shift.index') }}">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-7" class="post-image img-responsive" src="{{ asset('images/permission.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Shift
                    </h4>
                </div>
            </div>
            <a href="{{ route('holiday_calendar.index') }}">
            </a>
        </a>
    </div>
    <!-- End of Blog Post 6 -->
    <!-- Blog Post 7 -->
    <div class="item">
        <div class="blog-card">
            <div class="media-block">
                <a href="blog-post-1.html">
                    <img alt="blog-post-7" class="post-image img-responsive" src="{{ asset('images/permission.png') }}"/>
                    <div class="mask">
                    </div>
                </a>
            </div>
            <div class="post-info">
                <a href="blog-post-1.html">
                    <h4 class="blog-item-title">
                        Permission Set
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        jQuery('.disableClass .list_box ul li a').click(function () {return false;});
    });
</script>
@endsection
