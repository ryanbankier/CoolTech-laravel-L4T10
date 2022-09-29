<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware Reviews</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
<div class="container-fluid">
    <h1>Hardware Reviews</h1>
    @foreach ( $hardReviews as $hardReview )
    <h2><a href="article/{{ $hardReview->id }}">{{$hardReview->title}}</a></h2>
        <p>{{$hardReview->created}} | Category: <a href="category/{{ $hardReview->cat_slug }}">{{$hardReview->category}}</a> | Tags: {{$hardReview->tags}}</p>
        
        <p>{{substr($hardReview->content, 0, 350)}} <a href="article/{{ $hardReview->id }}">Read More</a></p>
    @endforeach
</div>
<x-cookie-notice />
<x-footer />
        
    
</body>
</html>
</html>