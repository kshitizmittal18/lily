@extends('layouts.app')
<style>
   .blog-masonry.two-columns .item{
    width: 33%;
   } 
</style>
@section('header-name')
    {{ 'Reports' }}
@endsection
@section('content')
<!-- Blog Posts Grid -->
<div class="blog-masonry two-columns container">
    <div class="item">
        <a href="">
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
        <a href="">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-2" class="post-image img-responsive" src="{{ asset('images/department.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Time Sheet
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 2 -->
    <!-- Blog Post 3 -->
    <div class="item">
        <a href="">
            <div class="blog-card">
                <div class="media-block">
                    <img alt="blog-post-3" class="post-image img-responsive" src="{{ asset('images/designation.png') }}"/>
                    <div class="mask">
                    </div>
                </div>
                <div class="post-info">
                    <h4 class="blog-item-title">
                        Time Sheet Request
                    </h4>
                </div>
            </div>
        </a>
    </div>
    <!-- End of Blog Post 3 -->    
</div>
<script>
    jQuery(document).ready(function($) {
        jQuery('.disableClass .list_box ul li a').click(function () {return false;});
    });
</script>
@endsection
