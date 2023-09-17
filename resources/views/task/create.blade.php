
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('task.store') }}" method="post">
        <label for="task">Enter Your task :</label>
        <input type="text" id="task" name="task">
        <button type="submit">Submit</button>
        @csrf
    </form>
</body>
</html>
