@extends('layouts.app')

@section('title', 'Todoリスト -ごみ箱-')

@section('content')

@if ($tasks->isEmpty())
<div class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <h1 class="mt-4 text-balance font-semibold tracking-tight text-gray-500 sm:text-5xl">ごみ箱は空です</h1>
    <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">To-Doリストを追加してください。</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="{{ route('index') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">追加画面に戻る</a>
    </div>
  </div>
</div>
@else
<div class="md:w-1/2 mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
  <!-- ヘッダー -->
  <div class="flex items-center px-4 py-4 relative">
    <!-- タイトルを中央揃え -->
    <h1 class="text-gray-800 font-bold text-2xl absolute left-1/2 transform -translate-x-1/2">ごみ箱</h1>
    <!-- ボタン群 -->
    <div class="ml-auto flex space-x-2">
      <button class="flex-shrink-0 bg-gray-500 hover:bg-gray-700 border-gray-500 hover:border-gray-700 text-sm border-4 text-white py-1 px-2 rounded" onclick="location.href='{{ route('index') }}'">戻る</button>
      <form action="{{ route('tasks.clearTrash') }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="flex-shrink-0 bg-pink-600 hover:bg-pink-700 border-pink-600 hover:border-pink-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit" onClick="return clearConfirm(event)">ごみ箱を空にする</button>
      </form>
    </div>
  </div>
  <!-- タスクリスト -->
  <ul class="divide-y divide-gray-200 px-4">
    @foreach ($tasks as $task)
    <li class="flex items-center py-4 justify-between">
      <div class="flex items-center">
        <input id="todo{{ $task->id }}" name="todo{{ $task->id }}" type="checkbox" class="w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded mr-2" />
        <label for="todo{{ $task->id }}" class="block text-gray-900">
          <span class="text-lg font-medium">{{ $task->task_name }}</span>
          <span class="text-sm font-light text-gray-500 ml-5">{{ $task->due_date }}</span>
        </label>
      </div>
      <form action="{{ route('tasks.recover', ['id' => $task->id]) }}" method="POST">
      @csrf
      @method('PUT')
        <div class="flex space-x-2">
          <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" onClick="return recoverTaskConfirm(event)" type="submit">復元</button>
        </div>
      </form>
    </li>
    @endforeach
  </ul>
</div>
@endif
@endsection
