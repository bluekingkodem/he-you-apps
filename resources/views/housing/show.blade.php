@extends('layout.admin')

@section('content')
    <br><br><br><br><br><br><br>
    <div class="container">

        <div class="row text-center">

            <div class="card">
                <div class="card-body">
                    <img width="100" height="100" src="/storage/{{ $housing->image }}" alt="">
                    <h3 class="card-title">Titre : {{ $housing->title }}</h3>
                    <h3 class="card-title">Categorie : {{ $housing->category?->name }}</h3>
                    <h3 class="card-subtitle mb-2 text-body-secondary">Adresse : {{ $housing->address }}</h3>
                    <h4 class="card-title">description: {{ $housing->description }}</h4>
                    <h4 class="card-title">Prix: {{ $housing->price }}</h4>

                    @if (!empty($housing->number_salons))
                        <h4 class="card-title">Nombre de salon: {{ $housing->number_salons }}</h4>
                    @endif
                    @if (!empty($housing->number_rooms))
                        <h4 class="card-title">Nombre de chambre: {{ $housing->number_rooms }}</h4>>
                    @endif
                    @if (!empty($housing->number_kitchens))
                        <h4 class="card-title">Nombre de cuisine: {{ $housing->number_kitchens }}</h4>
                    @endif
                    @if (!empty($housing->number_toilets))
                        <h4 class="card-title">Nombre de toilette: {{ $housing->number_toilets }}</h4>
                    @endif

                    @if ($housing->status == 'available')
                        <h4 class="card-title">Statut: Disponible</h4>
                    @elseif ($housing->status == 'unavailable')
                        <h4 class="card-title">Statut: Indisponible</h4>
                    @else
                        <h4 class="card-title">Statut: Reserver</h4>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
