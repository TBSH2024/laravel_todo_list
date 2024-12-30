@extends('layouts.app')

@section('title', 'Todoリスト')

@section('content')
<div class="md:w-1/2 mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
  <div class="flex items-center justify-between px-4 py-4">
  <h1 class="text-gray-800 font-bold text-2xl flex-grow text-center">To-Doリスト</h1>
  <a href="{{ route('trash') }}" class="text-md text-red-500 hover:text-red-700">ごみ箱</a>
</div>
  <form action="{{ route('tasks.create') }}" method="POST" class="w-full max-w-3xl mx-auto px-4 py-2">
    @csrf
    <div class="flex items-center border-b-2 border-teal-500 py-2">
      <input class="shadow appearance-none border rounded flex-[7] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="task_name" placeholder="タスクを入力してください">
      <input class="appearance-none bg-transparent border-none flex-[3] text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="datetime-local" name="due_date" value="{{ now() }}" />
      <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">追加</button>
    </div>
  </form>
  <ul class="divide-y divide-gray-200 px-4">
  @if ($tasks->isEmpty())
    <div class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
      <div class="text-center">
        <h1 class="mt-4 text-balance font-semibold tracking-tight text-gray-500 sm:text-5xl">To-Doがありません</h1>
        <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">To-Doリストを追加してください。</p>
      </div>
    </div>
    @endif
    @foreach ($tasks as $task)
    <li class="flex items-center py-4 justify-between">
      <div class="flex items-center">
        <input id="todo{{ $task->id }}" name="todo{{ $task->id }}" type="checkbox" class="w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded mr-2" />
        <label for="todo{{ $task->id }}" class="block text-gray-900">
          <span class="text-lg font-medium">{{ $task->task_name }}</span>
          <span class="text-sm font-light text-gray-500 ml-5">{{ $task->due_date }}</span>
        </label>
      </div>
      <div class="flex space-x-2">
        <form action="{{ route('tasks.moveToTrash', $task->id) }}" method="POST">
        @csrf
          <button class="flex-shrink-0 bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">完了</button>
        </form>
        <form action="{{ route('tasks.moveToTrash', $task->id) }}" method="POST">
          @csrf
          <button class="flex-shrink-0 bg-pink-600 hover:bg-pink-700 border-pink-600 hover:border-pink-700 text-sm border-4 text-white py-1 px-2 rounded" type="button" onClick="return deleteConfirmItem(event)">削除</button>
        </form>
      </div>
    </li>
    @endforeach
  </ul>
</div>
@endsection