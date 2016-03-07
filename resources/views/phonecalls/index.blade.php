@extends('layouts.app')

@section('title', 'Overview')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Phone calls</div>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone number</th>
                <th>Notes</th>
                <th>Date/time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse($phoneCalls as $phoneCall)
                <tr>
                    <td>{{ $phoneCall->name }}</td>
                    <td>{{ $phoneCall->phone_number }}</td>
                    <td>{{ $phoneCall->notes }}</td>
                    <td>{{ $phoneCall->created_at }}</td>
                    <td>{{ link_to_route('phone_calls.edit', 'Modify', $phoneCall->id) }}</td>
                    <td>{!! delete_form(['phone_calls.destroy', $phoneCall->id], '<span class="glyphicon glyphicon-trash"></span>', ['class' => 'btn btn-xs btn-danger']) !!}</td>
                </tr>
            @empty
                <tr>
                    <td>No phone calls</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection