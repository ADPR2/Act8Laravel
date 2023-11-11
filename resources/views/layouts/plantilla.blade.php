<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('styles')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    


    <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f8f9fa;
                margin: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .navbar {
                background-color: #1461AD;
            }
            .main-container {
                background-color: #fff;
                border-radius: 20px;
                padding: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin: 20px auto;
                width: calc(100% - 40px);
                max-width: 90%;
                flex-grow: 1; 
            }
            .main-container h1 {
                color: #333;
                font-weight: 900;
            }
            .content-box {
                background-color: #f8f9fa;
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 15px;
                margin-top: 20px;
                text-align: center;
            }
            .content-box h2 {
                color: #333;
                font-weight: 600; 
            }
            .document-box {
                background-color: #f8f9fa;
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 15px;
                margin-top: 20px;
                text-align: center;
            }
            .document-box h2 {
                color: #333;
                font-weight: 900;
            }
            .btn-custom {
            background-color: #4e73df;
            color: white;
            border-radius: 20px;
        }
        body, html {
            height: 100%;
            margin: 0;
        }

        .fixed-header, .fixed-footer {
            width: 100%;
            position: fixed;
            background: #1461ad;
            padding: 10px 0;
            color: white;
            z-index: 999999;
        }

        .fixed-header {
            top: 0;
        }

        .fixed-footer {
            bottom: 0;
            text-align: center;
        }

        .content {
            padding-top:70px;
            padding-bottom: 60px;
            max-width: 90%;
            margin: 0 auto;
            
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-size: 2.5em; 
            color: #007bff; 
            text-align: center;
            

        }

        h2 {
            font-family: 'Arial', sans-serif;
            font-size: 1em; 
            color: #6c757d; 
            margin-top: -10px;
            text-align: center;
        }

        .content {
            max-width: 100%;
            overflow-x: auto; /* Esto permitirá el desplazamiento horizontal si el contenido interno se desborda */
        }

    
    </style>

</head>

<body>
    <header class="fixed-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Cursos Tecmilenio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.create') }}">Nuevo Curso</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-container">
        <div class="content">
            @yield('content')
            @yield('anotherContent')
        </div>
    </div>
    <footer class="fixed-footer">
        Cursos Tecmilenio. CDMX. 2023.
    </footer>
</body>

</html>

