@extends('layouts.master')

@section('title')
    Create a Ticket
@endsection

@section('head')
    <link href="/css/tickets/index.css" rel="stylesheet">
@endsection

@section('content')
    <h1>Create a Ticket</h1>

    <form method="POST" action="/tickets">

        <div class="details">* Required fields</div>
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    @include('includes.error-field', ['fieldName' => 'name'])
                </small>
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    @include('includes.error-field', ['fieldName' => 'title'])
                </small>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    @include('includes.error-field', ['fieldName' => 'description'])
                </small>
            </div>
        </div>

        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" value="{{ old('status') }}">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    @include('includes.error-field', ['fieldName' => 'status'])
                </small>
            </div>
        </div>

        <input type="submit" value="Add Ticket">
    </form>
@endsection