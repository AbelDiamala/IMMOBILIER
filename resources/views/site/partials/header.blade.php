<header class="header-area">
    <!-- Top Header -->
    <div class="top-header-area">
        <div class="h-100 d-md-flex justify-content-between align-items-center">
            <div class="email-address">
                <a href="#"><span>[email protected]</span></a>
            </div>
            <div class="phone-number d-flex">
                <div class="icon">
                    <img src="{{ asset('img/icons/phone-call.png') }}" alt="">
                </div>
                <div class="number">
                    <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/core-img/logo.png') }}" alt="">
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <div class="classynav">
               

                    <ul>
    <li><a href="/"><i class="fa fa-home fa-2x"></i></a></li>

    <li><a href="#">Maisons</a>
        <ul class="dropdown">
            <li><a href="/maison.vente">En vente</a></li>
            <li><a href="/maison.location">En location</a></li>
        </ul>
    </li>

    <li><a href="/reservation">Réserver un bien</a></li>

    <li><a href="/visite">Demander une visite</a></li>

    <li><a href="/alertes">Alertes SMS</a></li>

    <li><a href="/a-propos">À propos</a></li>

    <li><a href="/contact">Contact</a></li>

    <!-- Mega menu exemple pour catégories -->
    <li><a href="#">Catégories</a>
        <div class="megamenu">
            <ul class="single-mega cn-col-4">
                <li class="title">Par ville</li>
                <li><a href="/maisons/abidjan">Abidjan</a></li>
                <li><a href="/maisons/bouake">Bouaké</a></li>
                <li><a href="/maisons/yamoussoukro">Yamoussoukro</a></li>
            </ul>
            <ul class="single-mega cn-col-4">
                <li class="title">Par standing</li>
                <li><a href="/maisons/economique">Économique</a></li>
                <li><a href="/maisons/standard">Standard</a></li>
                <li><a href="/maisons/luxe">Luxe</a></li>
            </ul>
            <ul class="single-mega cn-col-4">
                <li class="title">Par nombre de pièces</li>
                <li><a href="/maisons/1-piece">1 pièce</a></li>
                <li><a href="/maisons/2-pieces">2 pièces</a></li>
                <li><a href="/maisons/3-pieces">3 pièces</a></li>
                <li><a href="/maisons/4-pieces">4 pièces</a></li>
            </ul>
            <ul class="single-mega cn-col-4">
                <li class="title">Autres filtres</li>
                <li><a href="/maisons/terrains">Terrains</a></li>
                <li><a href="/maisons/villas">Villas</a></li>
                <li><a href="/maisons/studios">Studios</a></li>
            </ul>
        </div>
    </li>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <li><a href="#">Espace Client  <i class="fa fa-user" aria-hidden="true"></i></a>
        <ul class="dropdown">
            <li><a href="/client/reservations">Mes réservations</a></li>
            <li><a href="/client/visites">Mes visites</a></li>
            <li><a href="/client/alertes">Mes alertes SMS</a></li>
            <li><a href="/client/profil">Mon profil</a></li>
        </ul>
    </li>
</ul>




                        <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" placeholder="Search Anything ...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
