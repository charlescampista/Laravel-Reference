<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>@yield('page-title','YOU HAVE FORGETEN IT')</title>

    <style>
        ul {
            list-style: none;

        }

        a {
            text-decoration: none;
            color: #000000;
        }

        a:hover {
            text-decoration: underline;
            color: #000000;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
        }

        .is-completed {
            text-decoration: line-through;
        }

        
    </style>
</head>


<body>

    <!-- Grey with black text -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/house">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/models">Models</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sponsor">Sponsors</a>
            </li>
            <li class="nav-item">
                <a href="/donator" class="nav-link">Donators</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/car">Cars</a>
            </li>
        </ul>
    </nav>


    <div class="container text-center">
        <h1>RJ Serra Models</h1>
        <p>MELHORES MODELOS DA REGIÃO SERRANA</p>
        @yield('page-content')
    </div>
    @yield('carousel')

    <div class="jumbotron text-center footer" style="margin-bottom:0">
        <p>Desenvolvedor Charles Campista</p>
    </div>


</body>

</html>