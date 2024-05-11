<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #f0f8ff6e;">

        <div class="container-fluid" style="background-color: #e3f2fd;">
            <div class="container">
                <nav class="navbar navbar-light" >
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/empleados">Empleados</a>
                        </li>                         
                        <li class="nav-item">
                            <a class="nav-link" href="/departamentos">Departamentos</a>
                        </li>                       
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>