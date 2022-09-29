<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<x-nav />
   <h1>Search Results</h1> 
    @foreach ($results as $result )

    <h2><a class="text-decoration-none" href="article/{{ $result->id }}">{{$result->title}}</a></h2>
        <p>{{$result->created}} | Category: <a href="category/{{ $result->cat_slug }}">{{$result->category}}</a> | Tags: 
        
        <!--Tags--> 
        @php
            $tagLi =explode(',', $result->tags);
        @endphp
        @for ($i = 0; $i<(count($tagLi)); $i++)
            <a href="{{ url('/tag/'.$tagLi[$i])}}">{{$tagLi[$i]}}</a>
        @endfor
        <!--end of tags-->
        </p>
        
        <p>{{$result->content}}</p>

    
    @endforeach

    

</body>
</html>