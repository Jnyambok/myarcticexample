@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as user!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






 @guest
        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
    @if(session('status'))
        <li class="nav-item">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ session('status')  }} <span class="caret"></span>
            </a>
        </li>

@endif