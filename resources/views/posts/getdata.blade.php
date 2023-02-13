
<h1>all posts</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <a  class="btn btn-secondary "href="{{route('posts.deleteall')}}" role="button">delete all</a>
    <a  class="btn btn-secondary "href="{{route('posts.deletealltruncate')}}" role="button">delete all truncate</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post) 
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary "  role="button">edit</a>
                <a href="{{route('post.delete',$post->id)}}" class="btn btn-secondary " role="button">delete</a>
                <td>
              </tr>
            @endforeach
         
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>