
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2.1/css/bootstrap.css')}}">
    <script src="{{ asset('styles/bootstrap-5.2.1/js/bootstrap.bundle.min.js')}}"></script>
</head>
    <body>
    <x-nav />
    <div class="container-fluid">
    <h1>Articles</h1>
        @foreach($tags as $article)

        <h2><a class="text-decoration-none" href="article/{{ $article->id }}">{{$article->title}}</a></h2>
        <p>{{$article->created}} | Category: <a class="text-decoration-none" href="category/{{ $article->cat_slug }}">{{$article->category}}</a> | Tags: 
        <!--Tags--> 
        @php
            $tagLi =explode(',', $article->tags);
        @endphp
        @for ($i = 0; $i<(count($tagLi)); $i++)
            <a class="text-decoration-none" href="{{ url('/tag/'.$tagLi[$i])}}">{{$tagLi[$i]}}</a>
        @endfor
        <!--end of tags-->
        </p>
        <p>{{substr($article->content, 0, 350)}} <a class="text-decoration-none" href="article/{{ $article->id }}">Read More</a></p>
  
        @endforeach
    <x-cookie-notice /> 
    </div>    
    <footer>
        <x-footer />
    </footer> 
    </body>
    
</html>