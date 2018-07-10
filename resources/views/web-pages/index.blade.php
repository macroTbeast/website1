@extends('layouts.app')

@section('content')
<div class="jumbotron">
<center>
    <h1 class="display-4">Hello, there friend!</h1>
    <p class="lead">Welcome to my test forum/blog. Feel free to create an account if you want to post something, or just have a look around as a guest.</p>
    <hr class="my-4">
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</center>
</div>
    @endsection