@extends('layouts.app')

@section('content')

    <h1>ID:{{ $task->id }}のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', [
                                    '未完了' => '未完了',
                                    '着手中' => '着手中',
                                    '完了' => '完了',
                                    ]) !!}
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection