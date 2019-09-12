@extends('layouts.master_admin_layouts')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">

       <h4 class="block">
           @if(session()->has('success'))
               <span class="alert alert-success">{{session()->get('success')}}</span>
           @endif
           @if(session()->has('error'))
               <span class="alert alert-danger">{{session()->get('error')}}</span>
           @endif
       </h4>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.create.form')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Enter name">
                        <span class="text text-danger">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" value="{{old('email')}}"  class="form-control" id="email" placeholder="Enter email">
                        <span class="text text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="mobile_number">Mobile number</label>
                        <input type="number" name="mobile_number" value="{{old('mobile_number')}}" class="form-control" id="mobile_number" placeholder="Enter mobile number">
                        <span class="text text-danger">{{$errors->first('mobile_number')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control" id="password" placeholder="Password">
                        <span class="text text-danger">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="retype_password">Re-type password</label>
                        <input type="password" name="retype_password" value="{{old('retype_password')}}" class="form-control" id="retype_password" placeholder="Re-type Password">
                        <span class="text text-danger">{{$errors->first('retype_password')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo">
                        <span class="text text-danger">{{$errors->first('photo')}}</span>

                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
