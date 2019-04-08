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
        <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>

            <td>Jacob</td>
            <td>Thornton</td>
            <td>Thornton</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td>Larry</td>
            <td>the Bird</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
@endsection