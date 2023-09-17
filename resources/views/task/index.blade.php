<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-red-300">
@foreach ($tasks as $task)
    {{ $task->task }},
    @if ($task->isDone())
        <b>done</b>
    @else
        <b>Undone</b>
    @endif
    <a href="{{ route('task.edit', $task) }}">
        Edit
    </a>

    <form action="{{ route('task.destroy', $task) }}" method="post">
        @method('delete')
        <button type="submit">delete</button>
        @csrf
    </form>
    <br>
@endforeach
</body>
</html>
