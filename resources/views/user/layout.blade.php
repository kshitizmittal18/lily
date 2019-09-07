@extends('layouts.app')
@section('styles')
@endsection
@section('header-name')
{{ 'Edit User' }}
@endsection
@section('content')
<section class="main_top_box_wrapper">
    <div class="col-md-12 lily-breadcrumb">
        <ol class="breadcrumb s2">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">
                    Admin
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('user.index') }}">
                    User
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Edit User
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <figure class="tabBlock">
                <ul class="tabBlock-tabs">
                    <li class="tabBlock-tab is-active">
                        Profile
                    </li>
                    <li class="tabBlock-tab">
                        Work
                    </li>
                    <li class="tabBlock-tab">
                        Login Credentials
                    </li>
                    <li class="tabBlock-tab">
                        Roles & Permissions
                    </li>
                </ul>
                <div class="tabBlock-content">
                    <div class="tabBlock-pane">
                        @include('user.edit_user.profile')
                    </div>
                    <div class="tabBlock-pane">
                        @include('user.edit_user.work')
                    </div>
                    <div class="tabBlock-pane">
                        @include('user.edit_user.login')
                    </div>
                    <div class="tabBlock-pane">
                        @include('user.edit_user.role')
                    </div>
                </div>
            </figure>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
    var TabBlock = {
        s: {
            animLen: 200
        },
        init: function() {
            TabBlock.bindUIActions();
            TabBlock.hideInactive();
        },
        bindUIActions: function() {
            $(".tabBlock-tabs").on("click", ".tabBlock-tab", function() {
                TabBlock.switchTab($(this));
            });
        },
        hideInactive: function() {
            var $tabBlocks = $(".tabBlock");
            $tabBlocks.each(function(i) {
                var $tabBlock = $($tabBlocks[i]),
                    $panes = $tabBlock.find(".tabBlock-pane"),
                    $activeTab = $tabBlock.find(".tabBlock-tab.is-active");
                $panes.hide();
                $($panes[$activeTab.index()]).show();
            });
        },
        switchTab: function($tab) {
            var $context = $tab.closest(".tabBlock");
            if (!$tab.hasClass("is-active")) {
                $tab.siblings().removeClass("is-active");
                $tab.addClass("is-active"); 
                TabBlock.showPane($tab.index(), $context);
            }
        },
        showPane: function(i, $context) {
            var $panes = $context.find(".tabBlock-pane");
            // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter
            $panes.slideUp(TabBlock.s.animLen);
            $($panes[i]).slideDown(TabBlock.s.animLen);
        }
    };
    $(function() {
        TabBlock.init();
    });
</script>
@endsection
