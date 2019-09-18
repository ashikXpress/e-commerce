@extends('layouts.master_admin_layouts')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">All service data info <a class="btn btn-success" href="{{route('service.create.form')}}">Create service</a></h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th rowspan="1">Sl</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Author</th>
                                        <th rowspan="1" colspan="1">Title</th>
                                        <th rowspan="1" colspan="1">descriptions</th>
                                        <th rowspan="1" colspan="1">Before photo</th>
                                        <th rowspan="1" colspan="1">After photo</th>
                                        <th rowspan="1" colspan="2">Action</th>

                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr role="row" class="odd">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->admin->name}}</td>
                                            <td>{{$service->title}}</td>
                                            <td>{{\Illuminate\Support\Str::words($service->descriptions, $words = 20, $end = '...')}}</td>
                                            <td>
                                                <img style="width: 40px" src="{{asset('uploads/'.$service->serviceImage->before_photo)}}" alt="not found">
                                            </td>
                                            <td>
                                                <img style="width: 40px" src="{{asset('uploads/'.$service->serviceImage->after_photo)}}" alt="not found">
                                            </td>


                                            <td>

                                                <div class="btn-group">

                                                    <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-gear tiny-icon"></i> <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>

                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1">Sl</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Author</th>
                                        <th rowspan="1" colspan="1">Title</th>
                                        <th rowspan="1" colspan="1">descriptions</th>
                                        <th rowspan="1" colspan="1">Before photo</th>
                                        <th rowspan="1" colspan="1">After photo</th>
                                        <th rowspan="1" colspan="2">Action</th>
                                    </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    {{$services->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection

