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
                    <h3 class="box-title">Create service</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('service.create.form')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Service name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Enter name">
                            <span class="text text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="title">Service title</label>
                            <input type="text" name="title" value="{{old('title')}}"  class="form-control" id="title" placeholder="Enter title">
                            <span class="text text-danger">{{$errors->first('title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="slug">Service slug</label>
                            <input type="text" name="slug" value="{{old('slug')}}" class="form-control" id="slug" placeholder="Enter slug">
                            <span class="text text-danger">{{$errors->first('slug')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="descriptions">Service descriptions</label>
                            <textarea rows="8"  class="form-control" name="descriptions" placeholder="Enter descriptions" id="descriptions">{{old('descriptions')}}</textarea>

                            <span class="text text-danger">{{$errors->first('descriptions')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="before_photo">Before photo</label>
                            <input type="file" class="form-control" name="before_photo" id="before_photo">
                            <span class="text text-danger">{{$errors->first('before_photo')}}</span>

                        </div>
                        <div class="form-group">
                            <label for="after_photo">After photo</label>
                            <input type="file" class="form-control" name="after_photo" id="after_photo">
                            <span class="text text-danger">{{$errors->first('after_photo')}}</span>

                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
