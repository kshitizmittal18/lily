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
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


@endsection
@section('header-name')
{{ 'Add Shift' }}
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
                    Shift
                </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
                Add Shift
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route' => 'shift.store','class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="box-body">
                <div class="common_shadow_box">
                    <h3>
                        Shift Info
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
                                                Start Time
                                            </strong>
                                        </span>
                                        <input class="timepicker form-control" type="text">
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
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('department.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    {!! Form::close() !!}
</section>
@endsection
@section('scripts')
{{-- Scripts Here --}}
<script>

    $('.timepicker').datetimepicker({
        format: 'HH:mm:ss'
    }); 

</script>
@endsection
