
<h1>create new post</h1>
<form action="{{route("post.insert")}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enyet Title"><br><br>
    <input type="text" name="body" placeholder="Enyet Body"><br><br>
    <button type="submit">create</button>
</form>