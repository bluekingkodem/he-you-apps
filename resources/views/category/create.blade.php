@extends('layout.admin')

@section('content')
    <div id="layoutSidenav_content">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Ajouter une categorie</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                {{-- Categorie --}}
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Entrez la categorie" value="{{ old('name') }}" />
                                            <label for="title">Nom categorie</label>
                                        </div>
                                        <div class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit"
                                            class="btn btn-primary btn-block">Ajouter</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
