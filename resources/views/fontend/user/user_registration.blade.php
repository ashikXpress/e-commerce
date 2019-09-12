<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-2">
            @if(session()->has('success'))
                <h5 class="alert alert-success">{{session()->get('success')}}</h5>
            @endif
            @if(session()->has('error'))
                    <h5 class="alert alert-danger">{{session()->get('error')}}</h5>
             @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-2">
            <form action="{{route('user.registration.form')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control" placeholder="Enter name">
                    <span class="text text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email">
                    <span class="text text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group">
                    <label for="mobile_number">Mobile number</label>
                    <input type="number" name="mobile_number" value="{{old('mobile_number')}}" id="mobile_number" class="form-control" placeholder="Enter mobile number">
                    <span class="text text-danger">{{$errors->first('mobile_number')}}</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control" placeholder="Enter password">
                    <span class="text text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group">
                    <label for="retype_password">Retype password</label>
                    <input type="password" name="retype_password" value="{{old('retype_password')}}" id="retype_password" class="form-control" placeholder="Enter retype password">
                    <span class="text text-danger">{{$errors->first('retype_password')}}</span>
                </div>
                <div class="form-group">
                    <label for="photo">Image</label>
                    <input type="file" name="photo" value="{{old('photo')}}" id="photo" class="form-control">
                    <span class="text text-danger">{{$errors->first('photo')}}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
