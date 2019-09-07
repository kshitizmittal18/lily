@extends('layouts.app')
@section('styles')
<style>
</style>
@endsection
@section('content')
<section class="main_top_box_wrapper">
    <div class="col-md-12 lily-breadcrumb">
        <ol class="breadcrumb s2">
            <li class="breadcrumb-item">
                <a href="#">
                    Admin
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">
                    User
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Add New User
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route'=>'user.store','class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="box-body">
                <div class="common_shadow_box">
                    <h3>
                        User Info
                    </h3>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissable fade in">
                        <button aria-label="close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                <strong>
                                    Oops !
                                </strong>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                Name
                                            </strong>
                                        </span>
                                        {!! Form::text('name', null, ['class'=>"form-control",'required'=>true]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                Email
                                            </strong>
                                        </span>
                                        {!! Form::email('email', null, ['class'=>"form-control",'required'=>true,'id'=>'email']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                Gender
                                            </strong>
                                        </span>
                                        {!! Form::select('gender', ['male'=>'Male','female'=>'Female'], null, ['class'=>"form-control",'required'=>true]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                Date Of Joining
                                            </strong>
                                        </span>
                                        {!! Form::date('date_of_joining', Illuminate\Support\Carbon::now(), ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common_shadow_box">
                    <h3>
                        Login Credentials
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                <i class="fas fa-envelope">
                                                </i>
                                            </strong>
                                        </span>
                                        {!! Form::email('email', null, ['class'=>"form-control",'required'=>true,'readonly'=>true,'data-error'=>'Email is required','id'=>'useremail']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <strong>
                                                <i class="fas fa-lock">
                                                </i>
                                            </strong>
                                        </span>
                                        <input autocomplete="off" class="form-control" name="password" placeholder="password" readonly="true" type="password" value="123456"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('user.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
                </div>
            </div>
            <!-- /.box-body -->
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script>
    jQuery(document).ready(function(){
        jQuery("#email").on('keyup',function(){
            jQuery("#useremail").val(jQuery(this).val());
        });
    });
</script>
@endsection
