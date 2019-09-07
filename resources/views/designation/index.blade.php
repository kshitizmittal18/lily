@extends('layouts.app')
@section('styles')
@endsection
@section('content')

@section('header-name')
{{ 'Designations' }}
@endsection

<section class="main_top_box_wrapper"> 
    <div class="col-md-12 lily-breadcrumb">        
        <ol class="breadcrumb s2">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Designation</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Designation</li>
        </ol>        
    </div>
  


<div class="container-fluid">
    <div class="tab-content">
        <div class="button_box">
            <a href="{{ route('designation.create') }}">
                <span class="btn btn-success">
                    <i class="fas fa-plus">
                    </i>
                    Add Designation
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
                                    Code
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(@$designations as $value)
                                <tr>
                                    <td>
                                        {{ link_to_route('designation.edit', @$value->name, $value->id,array('title'=>@$value->name)) }}
                                    </td>
                                    <td>
                                        {{ @$value->code ?? 'N/A' }}
                                    </td>
                                    <td>
                                        {{ @$value->description ?? 'N/A' }}
                                    </td>
                                    <td>
                                        {{ @$value->status ? 'Enabled' : 'Disabled' }}
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
