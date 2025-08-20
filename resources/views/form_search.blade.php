@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Rechercher logement</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf

                            {{-- categorie de logement --}}
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option value="">Categorie</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            {{-- adresse --}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="address" type="text" name="address"
                                            placeholder="Bastos, Efoulan..." value="{{ old('address') }}" />
                                        <label for="address">Quel quartier ?</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Prix du logement --}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="price" type="text" name="price"
                                            placeholder="100000 FCFA" value="{{ old('price') }}" />
                                        <label for="price">Prix</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit"
                                        class="btn btn-primary btn-block">Rechercher</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
