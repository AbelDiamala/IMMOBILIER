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
@include('site.partials.includes.search-maison')





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



