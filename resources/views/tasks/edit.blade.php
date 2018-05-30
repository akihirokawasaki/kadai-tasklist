@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection