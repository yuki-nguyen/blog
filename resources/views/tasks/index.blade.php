<!DOCTYPE html>
<html>
<head>
    <title>About my blog</title>
</head>
<body>
<h1>About us</h1>
<ul>
    {{--@if....@endif, @while....@endwhile--}}

    @foreach ($tasks as $task)

        <li>
            <a href="/tasks/{{$task->id}}">
                {{$task->body}}
            </a>
        </li>

    @endforeach
</ul>

</body>
</html>