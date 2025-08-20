@extends('layout.admin')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Liste des utilisateurs
                    </div>
                    <a class="btn btn-primary w-25 mt-5 float" href="{{ route('user.create') }}">Ajouter un utilisateur
                        <i class="fa-solid fa-user-plus"></i></a>
                    <div class="card-body">
                        {{ $user->links() }}
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>telephone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->age }}</td>

                                        <td>{{ $u->role }}</td>

                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->phone }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('user.show', ['user' => $u->id]) }}"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a class="btn btn-warning"
                                                href="{{ route('user.edit', ['user' => $u->id]) }}"><i
                                                    class="fa-solid fa-pen"></i></a>
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    {{-- Modal --}}
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un
                                                        utilisateur
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Voulez vous supprimer cet utilisateur ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <a type="button" class="btn btn-danger"
                                                        href="{{ route('user.destroy', ['user' => $u->id]) }}">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    Aucun utilisateur
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
