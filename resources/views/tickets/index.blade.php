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
            <th>Category</th>
            <th>Title</th>
            <th>Status </th>
            <th>Last Updated</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
@endsection