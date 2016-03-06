@extends('layouts.app')

@section('title', 'Overview')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Phone call list
        </div>
        <div class="panel-body">
            <ul class="list-group">
                @forelse($phoneCalls as $phoneCall)
                    <li class="list-group-item">{{ $phoneCall->name }}</li>
                @empty
                        <li class="list-group-item">No phone calls</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection