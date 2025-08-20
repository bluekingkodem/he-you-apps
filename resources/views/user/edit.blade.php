@extends('layout.admin')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Modifier un utilisateur</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('modify', $user) }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Entrez votre nom et prenom"
                                                value="{{ old('name', $user->name) }}" />
                                            <label for="name">Nom et prenom</label>
                                        </div>
                                        <div class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="age" type="number" name="age"
                                                placeholder="Entrez votre age" value="{{ old('age', $user->age) }}" />
                                            <label for="age">Age</label>
                                        </div>
                                        <div class="text-danger">
                                            @error('age')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" type="email" name="email"
                                                placeholder="name@gmail.com" value="{{ old('email', $user->email) }}" />
                                            <label for="email">Adresse Email</label>
                                        </div>
                                        <div class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="phone" type="tel" name="phone"
                                                placeholder="Numero de telephone(Whatsapp)"
                                                value="{{ old('phone', $user->phone) }}" />
                                            <label for="phone">Numero de telephone</label>
                                        </div>
                                        <div class="text-danger">
                                            @error('phone')
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
