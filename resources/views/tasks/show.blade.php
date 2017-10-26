@extends('layouts.app')

@section('content')

    <h1>ID:{{ $task->id }} のタスク詳細ページ</h1>
    <p>メッセージ：{{ $task->content }}</p>
    <p>ステータス：{{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', '編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('[削除]') !!}
    {!! Form::close() !!}
    
@endsection