@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    
 

@endsection

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <header>
        <h1>menu de navegacion</h1>
        <nav>
            <ul>
                <li><a href = " {{ route ('CreateUser') }} ">Creacion de usuarios</a></li>
            </ul>
        </nav>
    </header>


    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        

        
    </div>
 


</body>
</html>-->