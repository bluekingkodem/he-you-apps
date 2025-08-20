@extends('layout.base')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(assets/img/hotel/showcase-7.webp);">
            <div class="container position-relative">
                <h1>Logements</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="current">Logements</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Rooms 2 Section -->
        <section id="rooms-2" class="rooms-2 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-3 col-md-4">
                        <div class="room-filters" data-aos="fade-right" data-aos-delay="100">
                            <h5>Filtrer les logements</h5>

                            <div class="filter-group">
                                <label>Par prix</label>
                                <input class="form-control" type="number">
                            </div>

                            <div class="filter-group">
                                <label>Par categorie</label>
                                <select class="form-select">
                                    <option value="">Categorie</option>
                                    <option value="appartement">Appartement</option>
                                    <option value="studio">Studio</option>
                                    <option value="chambre">Chambre</option>
                                </select>
                            </div>

                            <div class="filter-group">
                                <label>Par adresse</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>

                            {{-- <div class="filter-group">
                                <label>Room Features</label>
                                <div class="feature-checkboxes">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="wifi">
                                        <label class="form-check-label" for="wifi">Free Wi-Fi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="balcony">
                                        <label class="form-check-label" for="balcony">Private Balcony</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="kitchen">
                                        <label class="form-check-label" for="kitchen">Kitchenette</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="spa">
                                        <label class="form-check-label" for="spa">Spa Access</label>
                                    </div>
                                </div>
                            </div> --}}

                            <button type="button" class="btn btn-primary w-100">Filtrer</button>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8">
                        <div class="rooms-header d-flex justify-content-between align-items-center mb-4"
                            data-aos="fade-left" data-aos-delay="150">
                            <div class="results-count">
                                <span>{{ $housing->count() }} logements</span>
                            </div>
                            <div class="sort-options">
                                <select class="form-select">
                                    <option value="featured">Sort by: Featured</option>
                                    <option value="price-low">Price: Low to High</option>
                                    <option value="price-high">Price: High to Low</option>
                                    <option value="rating">Guest Rating</option>
                                </select>
                            </div>
                        </div>

                        <div class="row gy-4">
                            @foreach ($housing as $item)
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="room-card">
                                        <div class="room-image">
                                            <img src="assets/img/hotel/room-1.webp" alt="Deluxe Ocean Suite"
                                                class="img-fluid">
                                            {{-- <div class="room-badge">Best Seller</div> --}}
                                            <div class="room-price">
                                                <span class="price">{{ $item->price }} FCFA</span>
                                                <span class="period">/ mois</span>
                                            </div>
                                        </div>
                                        <div class="room-content">
                                            <h4>{{ $item->title }}</h4>
                                            <p>{{ $item->description }}</p>
                                            <div class="room-features">
                                                @if (!empty($item->number_salons))
                                                    <span><i class="fa-solid fa-couch"></i> {{ $item->number_salons }}</span>
                                                @endif
                                                @if (!empty($item->number_kitchens))
                                                    <span><i class="fa-solid fa-couch"></i> {{ $item->number_kitchens }}</span>
                                                @endif
                                                @if (!empty($item->number_toilets))
                                                    <span><i class="fa-solid fa-couch"></i> {{ $item->number_toilets }}</span>
                                                @endif
                                                @if (!empty($item->number_rooms))
                                                    <span><i class="fa-solid fa-couch"></i> {{ $item->number_rooms }}</span>
                                                @endif
                                            </div>
                                            <div class="room-actions">
                                                <a href="room-details.html" class="btn btn-primary">Voir details</a>
                                                {{-- <a href="booking.html" class="btn btn-outline-primary">Check
                                                    Availability</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Room Card -->
                            @endforeach
                        </div>
                        {{ $housing->links() }}

                        <div class="pagination-wrapper mt-5" data-aos="fade-up" data-aos-delay="500">
                            <nav aria-label="Room listings pagination">

                                {{-- <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul> --}}
                            </nav>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Rooms 2 Section -->

    </main>
@endsection
