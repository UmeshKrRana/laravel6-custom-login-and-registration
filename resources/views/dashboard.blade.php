@extends('master')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Laravel 6 User Registration and Login</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link text-white"> Welcome: {{ ucfirst(Auth()->user()->first_name) }} </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}"> Logout </a>
        </li>
      </ul>
    </div>
  </nav>

@endsection
