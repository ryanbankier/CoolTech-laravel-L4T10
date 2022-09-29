<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
   <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
</head>
<body>
<x-nav />
<div class="container">
    
  <div class="row" style="margin-top:45px">
  <h1>Administrator Login</h1>
    <div class="col-md-4 col-md-offset-6">
        <form action="{{route('auth.check')}}" method="post">
            @csrf
            <div class="results">
                

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="form-group gap-2">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <a href="register-admin">Create account</a>
        </form>
    </div>
  </div>  
</div>
</body>
</html>