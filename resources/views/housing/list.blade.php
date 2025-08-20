@extends('layout.admin')

@section('content')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Liste des logements
                </div>
                <a class="btn btn-primary w-25 mt-5 float ms-2" href="{{ route('housing.create') }}">Ajouter un logement <i class="fa-solid fa-house"></i></a>
                <div class="card-body">
                    {{ $housing->links() }}
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Adresse</th>
                                <th>Montant</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($housing as $h)
                                <tr>
                                    <td>{{ $h->title }}</td>
                                    {{-- @dump($h->category) --}}
                                    <td>{{ $h->category?->name }}</td>
                                    <td>{{ $h->address }}</td>
                                    <td>{{ $h->price }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('housing.show', ['housing' => $h->id]) }}"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-warning"
                                            href="{{ route('housing.edit', ['housing' => $h->id]) }}"><i
                                                class="fa-solid fa-pen"></i></a>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>

                                {{-- Modal --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer une categorie
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Voulez vous supprimer cette categorie ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a type="button" class="btn btn-danger"
                                                    href="{{ route('housing.destroy', ['housing' => $h->id]) }}">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Aucun logement
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
