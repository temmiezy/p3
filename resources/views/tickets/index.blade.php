@extends('layouts.master')

@section('title')
    {{ "This is the Index page" }}
@endsection

@section('head')
    <link href="/css/tickets/index.css" rel="stylesheet">
@endsection

@section('content')
    <div class="mt-3">
        <h1>Tickets Table</h1>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Description </th>
            <th>Status</th>
            <th>Last Updated</th>
        </tr>
        </thead>
        <tbody>
        @if(count($tickets) == 0)
            <tr>
                <td colspan="5">No tickets found.</td>
            </tr>
        @else
            @foreach($tickets as $title => $ticket)
                <tr>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['title'] }}</td>
                    <td>{{ $ticket['description'] }}</td>
                    <td>{{ $ticket['status'] }}</td>
                    <td>{{ $ticket['date'] }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection