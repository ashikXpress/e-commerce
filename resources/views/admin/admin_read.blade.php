@extends('layouts.master_admin_layouts')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Admin Data</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Mobile number</th>
                            <th>Image</th>
                        </tr>
                        @foreach($admins as $admin)
                        <tr>

                            <td>{{$admin->id}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->mobile_number}}</td>
                            <td><img style="width: 40px" src="{{asset('uploads/'.$admin->photo)}}" alt="not found"></td>


                        </tr>
                       @endforeach

                        </tbody></table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                 {{$admins->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
