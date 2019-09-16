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
                    <h3 class="box-title">Create portfolio</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('portfolio.create.form')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Service name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Enter name">
                            <span class="text text-danger">{{$errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="slug">Service slug</label>
                            <input type="text" name="slug" value="{{old('slug')}}" class="form-control" id="slug" placeholder="Enter slug">
                            <span class="text text-danger">{{$errors->first('slug')}}</span>
                        </div>


                        <div class="form-group">
                            <label for="attachments">All photo</label>
                            <input type="file" class="form-control" name="attachments[]" multiple id="attachments">
                            <span class="text text-danger">{{$errors->first('attachments')}}</span>

                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('portfolio.read')}}" class="btn btn-success">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
