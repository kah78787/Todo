@extends('layouts.layout')
@section('content')
<div class="text-7xl mb-4 mt-4 ms-3 font-fj">
    <p>CREATE YOUR TASK</p>
  </div>
  <form action="{{ route('task.store') }}" method="post" class="bg-white p-3 m-3 rounded-md">
    <label for="task" class="font-semibold ">Edit Your task :</label>
    <input class="rounded-lg focus:ring-purple-800" type="text" id="task" name="task">
    <br>
    <button type="sumbit" class="mt-4 focus:outline-none text-black bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-semibold rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-100">Submit</button>
    @csrf
    </form>
@endsection
