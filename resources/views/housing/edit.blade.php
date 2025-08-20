@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Modifier un logement</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Image --}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="image" type="file" name="image"
                                            placeholder="Entrez les images" />
                                        <label for="image">Image</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- titre --}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="title" type="text" name="title"
                                            placeholder="Entrez le titre du logement"
                                            value="{{ old('title', $housing->title) }}" />
                                        <label for="title">Titre</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea class="form-control" name="description" id="description" placeholder="Decrivez le logement"
                                            value="{{ old('description', $housing->description) }}" cols="30" rows="10">Description</textarea>
                                    </div>
                                    <div class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- categorie de logement --}}
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    @foreach ($category as $cat)
                                        <option @selected(old('category_id', $cat->id == $housing->category_id)) value="{{ $cat->id }}">{{ $cat->name }}
                                        </option>
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
                                            placeholder="Entrez l'adresse du logement"
                                            value="{{ old('address', $housing->address) }}" />
                                        <label for="address">Adresse</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Nombre de salon-chambre --}}
                            <div class="row mb-3">
                                {{-- Nombre de salon --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="number_salons" type="number" name="number_salons"
                                            placeholder="Entrez le nombre de salon"
                                            value="{{ old('number_salons', $housing->number_salons) }}" />
                                        <label for="V">Nombre de salon</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('number_salons')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                {{-- Nombre de chambre --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="number_rooms" type="number" name="number_rooms"
                                            placeholder="Entrez le nombre de chambre"
                                            value="{{ old('number_rooms', $housing->number_rooms) }}" />
                                        <label for="number_rooms">Nombre de chambre</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('number_rooms')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Nombre de cuisine-toilette --}}
                            <div class="row mb-3">
                                {{-- Nombre de cuisine --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="number_kitchens" type="number"
                                            name="number_kitchens" placeholder="Entrez le nombre de cuisine"
                                            value="{{ old('number_kitchens', $housing->number_kitchens) }}" />
                                        <label for="number_kitchens">Nombre de cuisine</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('number_kitchens')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                {{-- Nombre de toilette --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="number_toilets" type="number" name="number_toilets"
                                            placeholder="Entrez le nombre de toilette"
                                            value="{{ old('number_toilets', $housing->number_toilets) }}" />
                                        <label for="number_toilets">Nombre de toilette</label>
                                    </div>
                                    <div class="text-danger">
                                        @error('number_toilets')
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
                                            placeholder="Entrez le prix du logement"
                                            value="{{ old('price', $housing->price) }}" />
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
                                        class="btn btn-primary btn-block">Modifier</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
