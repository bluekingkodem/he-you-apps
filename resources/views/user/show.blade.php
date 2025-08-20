@extends('layout.admin')

@section('content')
<br><br><br><br><br><br><br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Nom et prenom: {{ $user->name }}</h3>
            <h4 class="card-subtitle mb-2 text-body-secondary">Age: {{ $user->age }}</h4>
            <h4 class="card-title">Email: {{ $user->email }}</h4>
            <h4 class="card-title">Telephone: {{ $user->phone }}</h4>
        </div>
    </div>
@endsection
