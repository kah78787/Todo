@extends('layouts.layout')
@section('content')
<div class="text-7xl mb-4 mt-4 ms-3 font-fj">
    <p>EDIT YOUR TASK</p>
  </div>
<div>
    <form action="{{ route('task.update',$task) }}" method="post" class="bg-white p-3 m-3 rounded-md">
        @method('PATCH')
        <label for="task" class="font-semibold ">Edit Your task :</label>
        <input class="rounded-lg focus:ring-purple-800" type="text" id="task" name="task" value="{{ $task->task }}">
        <div class="flex items-center mb-4">
            <input id="default-checkbox" name="done" type="checkbox" @if($task->isDone()) checked @endif class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ml-2 text-sm font-thin text-gray-900 dark:text-gray-400">Done || Undone</label>
        </div>
        <button type="sumbit" class="focus:outline-none text-black bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-semibold rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-100">Submit</button>
        @csrf
    </form>
</div>
@endsection
