@extends('layouts.app')

@section('title', 'Overview')

@section('css')
    {{ Html::style('css/overview.css') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
                Phone calls
            </h1>
        </div>

        <!-- Table -->
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
                <thead class="cf">
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
                        <td data-title="Name">{{ $phoneCall->name }}</td>
                        <td data-title="Phone number">{{ $phoneCall->phone_number }}</td>
                        <td data-title="Notes">{{ $phoneCall->notes }}</td>
                        <td data-title="Created at">{{ $phoneCall->created_at }}</td>
                        <td data-title="Edit">{!! modify_form(['phone_calls.edit', $phoneCall->id], '<span class="glyphicon glyphicon-pencil"></span>') !!}</td>
                        <td data-title="Delete">{!! delete_form(['phone_calls.destroy', $phoneCall->id], '<span class="glyphicon glyphicon-trash"></span>') !!}</td>
                    </tr>
                @empty
                    <tr>
                        <td>No phone calls</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection