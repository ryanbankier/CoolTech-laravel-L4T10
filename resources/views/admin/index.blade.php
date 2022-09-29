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

<div class="container-fluid">
<div>
    <x-nav />
    </div>
    
    <a href="author-admin" class="btn btn-primary">Add</a>

    @if (Session::get('success'))
    <p style="color:green">{{ Session::get('success')}}</p>
    @endif
    @if (Session::get('fail'))
    <p style="color:red">{{ Session::get('fail')}}</p>
    @endif
        <h1>Articles</h1>

        <table>
            <tbody>
            <tr><th>ID</th><th>Title</th><th>Category</th><th>Created</th></tr>
          

    @foreach($articles as $article)

        <tr>
            <td>{{$article->id}}</td><td>{{$article->title}}</td><td>{{$article->category}}</td><td>{{$article->created}}</td>
            <td>
                <div class="btn-group">
                    <a href="delete/{{ $article->id}}" class="btn btn-danger btn-sm">Delete</a>
                    <a href="edit/{{ $article->id}}" class="btn btn-primary btn-sm">Edit</a>
                </div>
                
            </td>
            
        </tr>
      
        @endforeach

        </tbody>
        </table>
        <x-cookie-notice />
</div>
    
</body>
<footer>
        <x-footer />
    </footer>
</html>