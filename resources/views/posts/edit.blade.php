
<h1>edit post</h1>
<form action="{{route("post.update",$post->id)}}" method="post">
    @csrf
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <input type="text" name="body" value="{{$post->body}}"><br><br>
    <button type="submit">create</button>
</form>