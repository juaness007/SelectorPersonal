<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/vervacantes.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
    @yield('estilos')
    <title>Selector Personal</title>
</head>
<body>
    <header id="main-header">
        <nav>
            <div class="logo">
                <img src="{{ asset('img/a.png') }}" alt="Tu Empresa">
            </div>
            <ul>

                @auth
                    @if(auth()->user()->role_id == 1)
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('instructor.index') }}">Visualizar Instructores</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidato</a></li>
                    @elseif(auth()->user()->role_id == 2)
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('vacancy.index') }}">Visualizar vacantes</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidato</a></li>
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @elseif(auth()->user()->role_id == 3)
                        <li><a href="{{ route('company.index') }}">Visualizar Empresas</a></li>
                        <li><a href="{{ route('company.create') }}">Crear empresas</a></li>
                        <li><a href="{{ route('candidate.index') }}">Visualizar candidatos</a></li>
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @elseif(auth()->user()->role_id == 4)
                    <li><a href="{{ route('vacancy.index') }}">Visualizar vacantes</a></li>
                    <li><a href="{{ route('postulate.index') }}">Vacantes a las que aplique</a></li>
                    <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @else
                        <li>No está registrado.</li>
                    @endif
                @endauth
            </ul>
        </nav>

    </header>

    @yield('content')
</body>
{{-- <footer class="site-footer">

            <section class="content-footer">
                <section class="container-footer">
                    <section class="cont one">
                        <h2>Conocenos</h2>
                        <h5><a href="">Sobre Nosotros</a></h5>
                    </section>
                    <section class="cont two">
                        <h2>Soporte</h2>
                        <h5><a href="">Manual De Usuario</a></h5>
                    </section>
                    <section class="cont three">
                    <img src="{{ asset('img/a.png') }}" alt="Tu Empresa">
                    </section>
                </section>
                <section class="copy">
                    <h3>Todos los derechos reservados &copy; 2023</h3>
                </section>
            </section>
        </footer> --}}
</html>

