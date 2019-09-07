@extends('layouts.app')
@section('styles')
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
    <style>
    </style>
    <div class="container-fluid">
        <div class="tab-content">
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
                                    <th rowspan="2">
                                        Day
                                    </th>
                                    <th rowspan="2">
                                        Shift
                                    </th>
                                    <th colspan="2">
                                        Attendance
                                    </th>
                                    <th rowspan="2">
                                        Correction
                                    </th>
                                </tr>
                                <tr>
                                    <th width="20%">
                                        First Half
                                    </th>
                                    <th style="width:20%">
                                        Second Half
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendance as $value)
                                    <tr>
                                        <td>
                                            {{ Carbon\Carbon::parse($value->date)->format('l, d F Y') }}
                                        </td>
                                        <td>
                                            {{ '-' }}
                                        </td>
                                        <td>
                                            {{ @$value->first_half ? 'P' : 'A'  }}
                                        </td>
                                        <td>
                                            {{ @$value->first_half ? 'P' : 'A'  }}
                                        </td>
                                        <td class="text-center">
                                            <!-- Button to trigger modal -->
                                            
                                            <i class="fas fa-edit" data-toggle="modal" href="#myModal"></i>
                                       
                                            <!-- Button to trigger modal -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  
</section>
  <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        x
                    </button>
                    <h4 class="modal-title">
                        Correction !
                    </h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'user.store','class'=>'form-horizontal','files'=>true,'method'=>'post','enctype'=>'multipart/form-data','autocomplete'=>'off']) !!}
                    <div class="box-body">
                        <div class="common_shadow_box">
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
                                    <div class="card">
                                        <div class="card-block">
                                            <h1 class="card-text good-review-score float-left">
                                                Manish Kumar Gupta
                                            </h1>
                                            <h4 class="card-title">
                                                Wednesday, 4 September 2019
                                            </h4>
                                            <h4 class="card-title">
                                                09:58 To 18:30
                                            </h4>
                                            <p class="card-text">
                                                With supporting text below as a natural lead-in to additional content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table class="data" width="100%">
                                        <tr>
                                            <th>
                                                First Half
                                            </th>
                                            <th>
                                                Second Half
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                Present
                                            </td>
                                            <td>
                                                Absent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="onoffswitch">
                                                    <input checked="" class="onoffswitch-checkbox" disabled="" id="myonoffswitch" name="onoffswitch" type="checkbox"/>
                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                        <div class="onoffswitch-inner">
                                                        </div>
                                                        <div class="onoffswitch-switch">
                                                        </div>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="onoffswitch">
                                                    <input class="onoffswitch-checkbox" id="myonoffswitch1" name="onoffswitch" type="checkbox"/>
                                                    <label class="onoffswitch-label" for="myonoffswitch1">
                                                        <div class="onoffswitch-inner">
                                                        </div>
                                                        <div class="onoffswitch-switch">
                                                        </div>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <strong>
                                                        Reason
                                                    </strong>
                                                </span>
                                                {!! Form::textarea(null, null, ['class'=>"form-control",'required'=>true,'id'=>'email','rows'=>2]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    var table = $('#usersTable').DataTable({
      dom: 'tiprl',
      scrollX: 'true',
      bSort: false
    });
    $('#search').on( 'keyup', function () {
      table.search( this.value ).draw();
    });
  });
</script>
@endsection
