<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <div>
            
            @foreach($posts as $post)
            <div>{{$post->title}}</div>
            @endforeach
        </div>
    </body>
</html>
