<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('auditorias') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
{{-- 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('auditorias.index')}}">Auditorias</a>
                        </li>
                    </ul> --}}
                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ms-auto">
                               
                        {{-- <li class="nav-item">
                            
                            <a class="nav-link" href= "">Clientes</a>
                        </li> --}}
                        {{-- index acciones --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('acciones.index') }}">Acciones</a>
                        </li>
                         {{-- fin acciones --}}
                        {{-- index hallazgos --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hallazgos.index') }}">Hallazgo</a>
                        </li>
                         {{-- fin hallazgos --}}
                         {{-- index auditoria --}}
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('auditorias.index') }}">Auditorias</a>
                        </li>
                         {{-- fin auditoria --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
                        </li>
                        {{--  --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                        </li>
                         {{--icono  --}} 
                       <!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- ... Otras opciones de navegación ... -->

    <!-- Icono -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
            </svg>
        </a>
    </li>
</ul>

 






                         {{--  --}}
                        {{--  fin prueba--}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{-- free --}}
     

    {{-- end free --}}

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
    
            $(".alert-dismissible").fadeTo(4000, 500).slideUp(500, function(){
                $(".alert-dismissible").alert('close');
            });
    
            $('[data-toggle="tooltip"]').tooltip({
                trigger : 'hover'
            });
        });
    </script>
    <script>
    $('.delete-confirm').on('click', function (e) {
            e.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Este registro y sus detalles se eliminarán!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: '¡Cancelar!',

            }).then(function(result) {
                if (result.value) {
                        this.on=(window.location.href = url);
                        }
                    });
                });
</script>
</body>
</html>
