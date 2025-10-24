@extends('site.layouts.app')

@section('content')

<!-- Hero Area -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <div class="single-hero-slide bg-img" style="background-image: url('{{ asset('img/bg-img/hero1.jpg') }}');">
            <div class="container h-100 d-flex align-items-center">
                <div class="hero-slides-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Trouvez votre maison</h2>
                </div>
            </div>
        </div>
        <div class="single-hero-slide bg-img" style="background-image: url('{{ asset('img/bg-img/hero2.jpg') }}');">
            <div class="container h-100 d-flex align-items-center">
                <div class="hero-slides-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Trouvez la maison de vos rêves</h2>
                </div>
            </div>
        </div>
        <div class="single-hero-slide bg-img" style="background-image: url('{{ asset('img/bg-img/hero3.jpg') }}');">
            <div class="container h-100 d-flex align-items-center">
                <div class="hero-slides-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Trouvez votre maison idéale</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Zone de recherche -->
<div class="south-search-area">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Recherche de maison</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>All Cities</option>
                                            <option>Riga</option>
                                            <option>Melbourne</option>
                                            <option>Vienna</option>
                                            <option>Vancouver</option>
                                            <option>Toronto</option>
                                            <option>Calgary</option>
                                            <option>Adelaide</option>
                                            <option>Perth</option>
                                            <option>Auckland</option>
                                            <option>Helsinki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>All Catagories</option>
                                            <option>Apartment</option>
                                            <option>Bar</option>
                                            <option>Farm</option>
                                            <option>House</option>
                                            <option>Store</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>All Offers</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="listings">
                                            <option>All Listings</option>
                                            <option>Listings 1</option>
                                            <option>Listings 2</option>
                                            <option>Listings 3</option>
                                            <option>Listings 4</option>
                                            <option>Listings 5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mil - 1300 mil</div>
                                    </div>
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>All Types</option>
                                                    <option>Apartment <span>(30)</span></option>
                                                    <option>Land <span>(69)</span></option>
                                                    <option>Villas <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>All Catagories</option>
                                                    <option>Apartment</option>
                                                    <option>Bar</option>
                                                    <option>Farm</option>
                                                    <option>House</option>
                                                    <option>Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>






<section class="listings-content-wrapper section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- ✅ Slider avec les photos ET vidéos du bien -->
                <div class="single-listings-sliders owl-carousel">

                    {{-- Photos --}}
                    @if($bien->photos->count() > 0)
                        @foreach($bien->photos as $photo)
                            <div class="item">
                                <img src="{{ $photo->URL_PHOTO }}" alt="{{ $bien->TITRE }}" class="w-100 rounded">
                            </div>
                        @endforeach
                    @endif

                    {{-- Vidéos --}}
                    @if($bien->videos->count() > 0)
                        @foreach($bien->videos as $video)
                            <div class="item">
                                <video class="w-100 rounded" controls preload="metadata">
                                    <source src="{{ $video->URL_VIDEO }}" type="video/mp4">
                                    Votre navigateur ne supporte pas la lecture vidéo.
                                </video>
                            </div>
                        @endforeach
                    @endif

                    {{-- Si aucun média --}}
                    @if($bien->photos->isEmpty() && $bien->videos->isEmpty())
                        <div class="item">
                            <img src="{{ asset('img/bg-img/default.jpg') }}" alt="{{ $bien->TITRE }}" class="w-100 rounded">
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-lg-8">
                <div class="listings-content">
                    <!-- 💰 Prix -->
                    <div class="list-price">
                        <p>{{ number_format($bien->PRIX, 0, ',', ' ') }} FCFA</p>
                    </div>

                    <h5>{{ $bien->TITRE }}</h5>

                    <p class="location">
                        <img src="{{ asset('img/icons/location.png') }}" alt="">
                        {{ $bien->localisation->LOCALISATION ?? '-' }}
                    </p>

                    <p>{{ $bien->DESCRIPTION }}</p>

                    <!-- 🏠 Méta infos -->
                    <div class="property-meta-data d-flex align-items-end">
                        @if($bien->NOUVELLE_CONSTRUCTION)
                            <div class="new-tag me-3">
                                <img src="{{ asset('img/icons/new.png') }}" alt="Nouveau">
                            </div>
                        @endif
                        <div class="bathroom me-3">
                            <img src="{{ asset('img/icons/bathtub.png') }}" alt="">
                            <span>{{ $bien->NB_DOUCHES }}</span>
                        </div>
                        <div class="garage me-3">
                            <img src="{{ asset('img/icons/garage.png') }}" alt="">
                            <span>{{ $bien->GARAGE ? 'Oui' : 'Non' }}</span>
                        </div>
                        <div class="space me-3">
                            <img src="{{ asset('img/icons/space.png') }}" alt="">
                            <span>{{ $bien->SURFACE ?? 0 }} m²</span>
                        </div>
                    </div>

                    <!-- ⚙️ Caractéristiques principales -->
                    <ul class="listings-core-features d-flex flex-wrap mt-3">
                        <li><i class="fa fa-check"></i> {{ $bien->type->NOM_TYPE ?? 'Type inconnu' }}</li>
                        <li><i class="fa fa-check"></i> {{ $bien->standing->NOM_STANDING ?? 'Non précisé' }}</li>
                        <li><i class="fa fa-check"></i> Étage : {{ $bien->ETAGE }}</li>
                        <li><i class="fa fa-check"></i> Nombre de pièces : {{ $bien->NB_PIECES }}</li>
                    </ul>

                    <!-- 🔘 Boutons -->
                    <div class="listings-btn-groups mt-3">
                        <a href="{{ url()->previous() }}" class="btn south-btn">⬅ Retour</a>
                        <a href="#" class="btn south-btn active">Contacter l’agent</a>
                    </div>
                </div>
            </div>

            <!-- 👨🏽‍💼 Colonne droite (Agent / Contact) -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-realtor-wrapper">
                    <div class="realtor-info">
                        <img src="{{ asset('img/bg-img/listing.jpg') }}" alt="">
                        <div class="realtor---info">
                            <h2>{{ $bien->utilisateur->NOM ?? 'Agent inconnu' }}</h2>
                            <p>Agent immobilier</p>
                            <h6><img src="{{ asset('img/icons/phone-call.png') }}" alt=""> {{ $bien->utilisateur->TELEPHONE ?? 'N/A' }}</h6>
                            <h6><img src="{{ asset('img/icons/envelope.png') }}" alt=""> {{ $bien->utilisateur->EMAIL ?? 'N/A' }}</h6>
                        </div>

                        <div class="realtor--contact-form mt-3">
                            <form method="post" action="#">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre Nom">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Votre Téléphone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Votre Message"></textarea>
                                </div>
                                <button type="submit" class="btn south-btn">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🌍 Google Map -->
        @if(!empty($bien->POSITIONGPS))
            <div class="row mt-5">
                <div class="col-12">
                    <div class="listings-maps">
                        <iframe 
                            src="https://www.google.com/maps?q={{ urlencode($bien->POSITIONGPS) }}&output=embed" 
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>


<script>
    $(document).ready(function(){
        $(".single-listings-sliders").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });
    });
</script>






@endsection



