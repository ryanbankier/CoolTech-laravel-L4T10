<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion Pieces</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
<div class="container-fluid">
    <h1>Opinion Pieces</h1>
    @foreach ( $opinions as $opinion )
    <h2><a class="text-decoration-none" href="article/{{ $opinion->id }}">{{$opinion->title}}</a></h2>
        <p>{{$opinion->created}} | Category: <a class="text-decoration-none" href="category/{{ $opinion->cat_slug }}">{{$opinion->category}}</a> | Tags: 
        
        <!--Tags--> 
        @php
            $tagLi =explode(',', $opinion->tags);
        @endphp
        @for ($i = 0; $i<(count($tagLi)); $i++)
            <a class="text-decoration-none" href="{{ url('/tag/'.$tagLi[$i])}}">{{$tagLi[$i]}}</a>
        @endfor
        <!--end of tags-->
        </p>
        
        <p>{{substr($opinion->content, 0, 350)}} <a class="text-decoration-none" href="article/{{ $opinion->id }}">Read More</a></p>
    @endforeach
</div>
<x-cookie-notice />
<x-footer />
        
    
</body>
</html>