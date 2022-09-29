<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Reviews</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
<div class="container-fluid">
    <h1>Software Reviews</h1>
    @foreach ( $softReviews as $soft )
    <h2><a class="text-decoration-none" href="article/{{ $soft->id }}">{{$soft->title}}</a></h2>
        <p>{{$soft->created}} | Category: <a class="text-decoration-none" href="category/{{ $soft->cat_slug }}">{{$soft->category}}</a> | Tags: 
    <!--Tags--> 
    @php
            $tagLi =explode(',', $soft->tags);
        @endphp
        @for ($i = 0; $i<(count($tagLi)); $i++)
            <a class="text-decoration-none" href="{{ url('/tag/'.$tagLi[$i])}}">{{$tagLi[$i]}}</a>
        @endfor
        <!--end of tags-->
    </p>
        
        <p>{{substr($soft->content, 0, 350)}} <a class="text-decoration-none" href="article/{{ $soft->id }}">Read More</a></p>
    @endforeach
</div>
<x-cookie-notice />
<x-footer />
        
    
</body>
</html>