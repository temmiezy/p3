@extends('layouts.master')

@section('title')
    {{ "Temperature Unit Converter App" }}
@endsection

@section('head')
    <link href="/css/tickets/index.css" rel="stylesheet">
@endsection

@section('heading')
    {{ "Temperature Unit Converter" }}
@endsection

@section('content')

    <h1 class="cover-heading">Conversion Form</h1>
    <br />
    <form method="POST" action="/converter">
        {{ csrf_field() }}
        <table class="converter_form_table">

            <tr>
                <td>
                    <select name="first_temp_type_name">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="given_value" value="{{ $givenValue }}" placeholder="Insert value">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        @include('includes.error-field', ['fieldName' => 'given_value'])
                    </small>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="second_temp_type_name">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn" value="Convert">
                </td>
            </tr>
            @if($result)
                <tr>
                    <td>{{ $result }}</td>
                </tr>
            @endif
        </table>
    </form>

@endsection