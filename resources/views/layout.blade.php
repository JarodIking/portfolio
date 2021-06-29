<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Porfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}"rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/styles.css')}}"rel="stylesheet" type="text/css">
    </head>
<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Jarod Iking</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profielFoto.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="exp">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="edu">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="websites">Websites</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="projects">Projects</a></li>
                </ul>
            </div>
        </nav>

    @yield('content')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>

</body>
</html>
