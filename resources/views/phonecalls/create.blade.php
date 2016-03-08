@extends('layouts.app')

@section('title', 'Create phone call note')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Create phone call note</div>
        <div class="panel-body">
            @if($errors->any())
                <ul class="list-group alert-danger">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {{ Form::open(['route' => 'phone_calls.store', 'method' => 'POST']) }}

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

            {{ Form::submit('Create', ['class' => 'btn btn-default']) }}
            {{ Form::close() }}


        </div>
    </div>
@endsection