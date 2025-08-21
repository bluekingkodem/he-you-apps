@extends('layout.admin')

@section('content')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Liste des categories
                </div>
                <a class="btn btn-primary w-25 mt-5 float" href="{{ route('category.create') }}">Ajouter une
                    categorie <i class="fa-solid fa-user-plus"></i></a>
                <div class="card-body">
                    {{ $category->links() }}
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($category as $cat)
                                <tr>
                                    <td>{{ $cat->name }}</td>

                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('category.edit', ['category' => $cat->id]) }}"><i
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
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer une
                                                    categorie
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
                                                    href="{{ route('category.destroy', ['category' => $cat->id]) }}">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Aucune categorie
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
