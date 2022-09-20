@extends('layouts/appMaster' )
@section('layoutContent')
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('assets/layouts/img/brand/brand_256x256.jpg') }}" alt="logo Balcão Brasil" style="width: 2rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ínicio"><i class="fa-sharp fa-solid fa-house"></i></a>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login"><i class="fa-solid fa-user"></i></a>
                </li>
                @endif
                @if (Route::has('cadastro'))
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cadastro"><i class="fa-solid fa-user-plus"></i></a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Procurar Comprador!" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

        </div>
    </div>
</nav>
<div class="container">
@yield('content')
</div>
@include('layouts.footer')
@endsection