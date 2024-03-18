@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="form-container">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ url('login') }}" method="post">
            @csrf
            <label for="email" class="letralogin">Correo:</label>
            <input type="text" name="email" required>
            <br>
            <label for="password" class="letralogin">Contraseña:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Ingresar"/>
            
        </form>
    </div>

    
    <div class="form-container">
        
        <form action="{{ route('user.create') }}">
        <p class="letralogin">¿No estás registrado?</p>
            <input type="submit" value="Regístrate"/>
        
        </form>
    </div>
@endsection

