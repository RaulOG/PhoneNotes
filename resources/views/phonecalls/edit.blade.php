@extends('layouts.app')

@section('title', 'Overview')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Edit phone call - {{ $phoneCall->id }}</div>
        <div class="panel-body">
            @if($errors->any())
                <ul class="list-group alert-danger">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
                </ul>
            @endif

            {{ Form::model($phoneCall, ['route' => ['phone_calls.update', $phoneCall->id], 'method' => 'PATCH']) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone_number', 'Phone number') }}
                {{ Form::text('phone_number', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('notes', 'Notes') }}
                {{ Form::text('notes', null, ['class'=>'form-control']) }}
            </div>

            {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
            {{ Form::close() }}


        </div>
    </div>
@endsection