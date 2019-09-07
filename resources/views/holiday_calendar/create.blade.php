@extends('layouts.app')
@section('styles')
<style>
.onoffswitch{
    margin: 0;
}
.onoffswitch-inner:before {
    content: "Enable";
    padding-left: 25px;
    background-color: #00A600;
    color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Disable";
    padding-right: 30px;
    background-color: #EEEEEE;
    color: #999999;
    text-align: right;
}
</style>
@endsection
@section('header-name')
{{ 'Add Calendar' }}
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
                    Calendar
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Add Calendar
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route' => 'holiday_calendar.store','class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="common_shadow_box">
                <h3>
                Calendar Info
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
                                        Calendar Name
                                        </strong>
                                    </span>
                                    {!! Form::text('name', old('name'), ['class'=>"form-control",'required'=>true,'placeholder'=>' Calendar Name']) !!}
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
                                        Country Name
                                        </strong>
                                    </span>
                                    {!! Form::text('name', old('name'), ['class'=>"form-control",'required'=>true,'placeholder'=>'Country Name']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                        Select holidays
                                        </strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            
                            <div class="col-sm-4">
                                <label>
                                    <input id="vehicle-damage" type="checkbox" value="vehicle-damage"/>
                                    Vehicle Damage
                                </label>
                                </br>
                                <label>
                                    <input id="land-damage" type="checkbox" value="land-damage"/>
                                    Land Damage
                                </label>
                                </br>
                                <label>
                                    <input id="tree-damage" type="checkbox" value="tree-damage"/>
                                    Tree Damage
                                </label>
                                </br>
                                <label>
                                    <input id="plant-damage" type="checkbox" value="plant-damage"/>
                                    Plant Damage
                                </label>
                                </br>
                            </div>
                            <div class="col-sm-4">
                                <label>
                                    <input id="structural-invasion" type="checkbox" value="structural-invasion"/>
                                    Structural Invasions
                                </label>
                                </br>
                                <label>
                                    <input id="flooding" type="checkbox" value="flooding"/>
                                    Flooding
                                </label>
                                </br>
                                <label>
                                    <input id="electrical-damage" type="checkbox" value="electrical-damage"/>
                                    Electrical Damage
                                </label>
                                </br>
                                <label>
                                    <input id="nests" type="checkbox" value="nests"/>
                                    Nests
                                </label>
                                </br>
                            </div>
                            <div class="col-sm-4">
                                <label>
                                    <input id="holes" type="checkbox" value="holes"/>
                                    Holes
                                </label>
                                </br>
                                <label>
                                    <input id="holes-w-mounds" type="checkbox" value="holes-w-mounds"/>
                                    Holes with Mounds
                                </label>
                                </br>
                                <label>
                                    <input id="bird-egg-loss" type="checkbox" value="bird-egg-loss"/>
                                    Bird and Egg Loss
                                </label>
                                </br>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                        Description
                                        </strong>
                                    </span>
                                    {!! Form::textarea('name', old('name'), ['class'=>"form-control",'required'=>true,'placeholder'=>'Description','rows'=>2]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="onoffswitch">
                                    <input class="onoffswitch-checkbox" id="myonoffswitch1" name="onoffswitch" type="checkbox" value="1"/>
                                    <label class="onoffswitch-label" for="myonoffswitch1">
                                        <div class="onoffswitch-inner">
                                        </div>
                                        <div class="onoffswitch-switch">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('department.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
                </div>
            </div>
            <!-- /.box-body -->
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection
@section('scripts')
{{-- Scripts Here --}}
@endsection