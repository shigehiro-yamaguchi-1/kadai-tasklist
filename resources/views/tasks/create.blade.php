@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'メッセージ') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', [
                                    '未完了' => '未完了',
                                    '着手中' => '着手中',
                                    '完了' => '完了',
                                    ], '未完了') !!}

        {!! Form::submit('作成') !!}

    {!! Form::close() !!}

@endsection