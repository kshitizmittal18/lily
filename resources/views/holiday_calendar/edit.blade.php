@extends('layouts.app')
@section('styles')
{{-- Styles Here --}}
@endsection

@section('header-name')
    {{ 'Edit Calendar' }}
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
                Edit Calendar
            </li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <!-- form start -->
            {!! Form::open(['route' => ['holiday_calendar.update',$calendar->id],'class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
            <div class="box-body">
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
                                                Name
                                            </strong>
                                        </span>
                                        {!! Form::text('name', $calendar->name, ['class'=>"form-control",'required'=>true,'placeholder'=>'Name']) !!}
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
                                        {!! Form::textarea('description', $calendar->description, ['class'=>'form-control', 'placeholder' => 'Description here...', 'id' => 'description', 'rows' => 2]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        @if($calendar->status)
                                        <p>
                                            <input checked="" id="test1" name="status" type="checkbox" value="1"/>
                                            <label for="test1">
                                                <span class="ui">
                                                </span>
                                                Select Status
                                            </label>
                                        </p>
                                        @else
                                        <p>
                                            <input id="test1" name="status" type="checkbox" value="1"/>
                                            <label for="test1">
                                                <span class="ui">
                                                </span>
                                                Select Status
                                            </label>
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common_shadow_box">
                    <h3>
                        Holidays
                    </h3>
                    <div class="tab-content">
                        <div class="button_box">
                            <a href="{{ route('holiday_calendar.holiday.create',$calendar->id) }}">
                                <span class="btn btn-success">
                                    <i class="fas fa-plus">
                                    </i>
                                    Add Holidays
                                </span>
                            </a>
                        </div>
                        <div class="list_box_wrappper">
                            <!-- Filters -->
                            <div class="filter_box">
                                <ul class="filterList">
                                    <li>
                                        <input class="form-control" id="search" placeholder="Search Here.." type="text"/>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid_wrapper">
                                <div id="tableWrap">
                                    <table cellspacing="0" class="dataTables_wrapper table table-bordered" id="usersTable" width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($holidays as $holiday)
                                                <tr>
                                                    <th>
                                                        {{ @$holiday->holiday_name }}
                                                    </th>
                                                    <th>
                                                        {{ @$holiday->holiday_date }}
                                                    </th>
                                                </tr>    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="common_shadow_box">
                {!! Form::submit('Submit', ['class'=>'blue_button']) !!}
                    {{ link_to_route('holiday_calendar.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
            </div>
        </div>
        <!-- /.box-body -->
        {!! Form::close() !!}
    </div>
</section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            var table = $('#usersTable').DataTable({
                dom: 'tiprl',
                scrollX: 'true',
            });

            $('#search').on( 'keyup', function () {
                table.search( this.value ).draw();
            });
        });
    </script>
@endsection
