<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Articles</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />

<div class="container-fluid">
<h2>New Article</h2>


<form action="add" method="post">
    @csrf
    <label for="">Title</label><br>
    <input class="form-control" type="text" name="title" size="72" value="{{ old('title') }}">
    <span style="color:red">@error('title'){{$message}} @enderror</span><br>
    <label for="">Content</label><br>
    <textarea class="form-control" name="content" value="{{ old('content') }}" cols="60" rows="20"></textarea>
    <span style="color:red">@error('content'){{$message}} @enderror</span><br>
    <label for="">Categories</label>
    <select class="form-select" name="category" id="">
        <option value="Tech news">Tech News</option>
        <option value="Software reviews">Software Reviews</option>
        <option value="Hardware reviews">Hardware Reviews</option>
        <option value="Opinion pieces">Opinion Pieces</option>
    </select><br>
    <label for="">Tags</label>
    <input class="form-control" type="text" name="tags" id=""><br>
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