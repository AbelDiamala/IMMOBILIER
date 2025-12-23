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

<!-- Corps (Featured Properties) -->
<section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Les plus visitées</h2>
                        <p>Découvrez les biens immobiliers les plus consultés par nos visiteurs.</p>
                    </div>
                </div>
            </div>

            <div class="row">

            
@foreach($biens as $bien)
    <div class="col-12 col-md-6 col-xl-4">
        <a href="{{ route('bien.show', Crypt::encrypt($bien->ID_BIEN)) }}" class="text-decoration-none text-dark">
            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                <!-- Property Thumbnail -->
                <div class="property-thumb">
                    <img src="{{ $bien->photos->first()->URL_PHOTO ?? 'img/bg-img/default.jpg' }}" alt="{{ $bien->TITRE }}">
                    <div class="tag">
                        <span>{{ $bien->statut->NOM_STATUT ?? 'Disponible' }}</span>
                    </div>
                    <div class="list-price">
                        <p>{{ number_format($bien->PRIX, 0, ',', ' ') }} FCFA</p>
                    </div>
                </div>

                <!-- Property Content -->
                <div class="property-content">
                    <h5>{{ $bien->TITRE }}</h5>
                    <p class="location"><img src="img/icons/location.png" alt="">{{ $bien->localisation->LOCALISATION ?? '-' }}</p>
                    <p hidden>{{ Str::limit($bien->DESCRIPTION, 100) }}</p>

                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                        @if($bien->NOUVELLE_CONSTRUCTION)
                            <div class="new-tag">
                                <img src="img/icons/new.png" title="NOUVELLE CONSTRUCTION">
                            </div>
                        @endif
                        <div class="bathroom">
                            <img src="img/icons/bathtub.png" title="SALLE D'EAU">
                            <span>{{ $bien->NB_DOUCHES }}</span>
                        </div>
                        <div class="garage">
                            <img src="img/icons/garage.png" title="GARAGE">
                            <span>{{ $bien->GARAGE ? 'Oui' : 'Non' }}</span>
                        </div>
                        <div class="space">
                            <img src="img/icons/space.png" title="SUPERFICIE">
                            <span>{{ $bien->SURFACE ?? 0 }} m²</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach



               
            </div>
        </div>
</section>

<!-- Call To Action -->
<section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url('{{ asset('img/bg-img/cta.jpg') }}');">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 text-center">
                <div class="cta-content">
                    <h2 class="wow fadeInUp" data-wow-delay="300ms">Vous cherchez un endroit où vivre ?</h2>
                    <h6 class="wow fadeInUp" data-wow-delay="400ms">Découvrez nos propriétés exclusives situées dans les plus beaux quartiers.</h6>
                    <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Recherche</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Ce que disent nos clients</h2>
                        <p>Des témoignages authentiques sur notre expertise et la qualité de nos biens.</p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



<style>
    .property-thumb {
  position: relative;
  overflow: hidden;
  
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.property-thumb img {
  width: 100%;
  height: 250px; /* tu peux ajuster selon ton design */
  object-fit: cover; /* garde le ratio et recadre */
  
  transition: transform 0.4s ease;
}

/* petit effet au survol */
.property-thumb:hover img {
  transform: scale(1.05);
}

.property-thumb .tag {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: rgba(255, 165, 0, 0.9);
  color: white;
  padding: 5px 10px;
  border-radius: 8px;
  font-size: 0.9rem;
}



</style>