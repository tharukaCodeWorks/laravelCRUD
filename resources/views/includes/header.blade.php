<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
  </head>
  <body>



        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Laravel CRUD Learn</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active':'' }}" >
                        <a class="nav-link" href="{{ url('/') }}">Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ url('/create') }}">Create </a>
                    </li>
                </ul>
            </div>
        </nav>