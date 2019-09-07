@extends('layouts.app')
@section('styles')
{{-- Styles Here --}}
@endsection

@section('header-name')
    {{ 'Add Designation' }}
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
                    Designation
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Add Designation
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route' => 'designation.store','class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="box-body">
                <div class="common_shadow_box">
                    <h3>
                        Designation Info
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
                                        {!! Form::text('name', old('name'), ['class'=>"form-control",'required'=>true,'placeholder'=>'Name']) !!}
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
                                                Code
                                            </strong>
                                        </span>
                                        {!! Form::text('code', old('code'), ['class'=>"form-control",'required'=>true,'placeholder'=>'Code']) !!}
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
                                                Description
                                            </strong>
                                        </span>
                                        {!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder' => 'Description here...', 'id' => 'description', 'rows' => 2]) !!}
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
                                                Status
                                            </strong>
                                        </span>
                                        <input checked="" name="status" type="checkbox" value="1">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('designation.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
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
