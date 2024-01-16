<!-- resources/views/users/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Créer un Utilisateur</h1>

    <!-- Formulaire de création d'utilisateur -->
    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" value="{{ old('username') }}" required>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- Ajoutez d'autres champs si nécessaire -->

        <button type="submit">Créer</button>
    </form>
@endsection
