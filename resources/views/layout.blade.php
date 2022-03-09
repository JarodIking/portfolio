<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('scriptsLinks.head')
<body>
        <!-- Navigation 1-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Jarod Iking</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/img/profielFoto.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    @foreach($tabs as $tab)
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/{{$tab->id}}">{{$tab->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>

        {{-- navigation 2 --}}
        @include('adminNav')

        @yield('content')


        @include('scriptsLinks.footer')
</body>
</html>
