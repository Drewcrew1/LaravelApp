@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is a laravel application.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a> </p>
    </div>


@endsection
