@extends('layouts.app')
@section('styles')
{{-- Styles Here --}}
@endsection

@section('header-name')
    {{ 'Add Holiday' }}
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
                    Holiday
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Add Holiday
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route'=>['holiday_calendar.holiday.store',$holiday_calendar_id],'class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="box-body">
                <div class="common_shadow_box">
                    <h3>
                        Holiday Info
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
                                        {!! Form::text('holiday_name', old('name'), ['class'=>"form-control",'placeholder'=>'Name']) !!}
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
                                                Date
                                            </strong>
                                        </span>
                                        {!! Form::date('holiday_date', old('holiday_date'), ['class'=>"form-control"]) !!}
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
                                                Type
                                            </strong>
                                        </span>
                                        {!! Form::select('holiday_type', ['Full Day'=>'Full Day','Half Day'=>'Half Day'],old('holiday_type'),['class'=>"form-control"]) !!}
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
                                        {!! Form::textarea('holiday_description', old('holiday_description'), ['class'=>'form-control', 'placeholder' => 'Description here...', 'id' => 'description', 'rows' => 2]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <p><input type="checkbox" checked id="test1" value="1" name="holiday_status" /><label for="test1"><span class="ui"></span>Select Status</label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('holiday_calendar.edit', 'Back', $holiday_calendar_id, array('class'=>'btn btn-primary','title'=>'Back')) }}
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
