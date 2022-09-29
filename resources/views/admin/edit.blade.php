<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Articles</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
<div class="container-fluid">
<h2>{{$Title}} | Article </Article></h2>


<form action="{{route('update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <label for="">Title</label><br>
    <input class="form-control" type="text" name="title" size="72" value="{{ $data->title }}">
    <span style="color:red">@error('title'){{$message}} @enderror</span><br>
    <label for="">Content</label><br>
    <textarea class="form-control" name="content" cols="60" rows="20">{{ $data->content }}</textarea><br>
    <span style="color:red">@error('content'){{$message}} @enderror</span>
    <label for="">Categories</label>
    <p>Current: {{ $data->category }}</p>
    <select class="form-select" name="category" id="" >
        <option style="color: Red ;" value="{{ $data->category }}">{{ $data->category }}</option>
        <option value="Tech news">Tech News</option>
        <option value="Software reviews">Software Reviews</option>
        <option value="Hardware reviews">Hardware Reviews</option>
        <option value="Opinion pieces">Opinion Pieces</option>
    </select><br>
    <label for="">Tags</label>
    <input class="form-control" type="text" name="tags" id="" value="{{ $data->tags }}"><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<x-cookie-notice />

</div>

</body>
<footer>
        <x-footer />
</footer>
</html>