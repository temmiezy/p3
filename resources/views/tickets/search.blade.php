@extends('layouts.master')

@section('title')
    {{ "This is the Search page" }}
@endsection

@section('head')
    <link href="/css/tickets/index.css" rel="stylesheet">
@endsection

@section('content')
    @if($searchTerm)
        <div class="mt-3">
            <h1>Tickets Search Result for <em>{{ $searchTerm }}</em></h1>
        </div>
        @if(count($searchResults) == 0)
            No matches found.
        @else
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
                @foreach($searchResults as $title => $ticket)
                <tr>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['title'] }}</td>
                    <td>{{ $ticket['description'] }}</td>
                    <td>{{ $ticket['status'] }}</td>
                    <td>{{ $ticket['date'] }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection