@extends('contacts.layout')
@section('content')

<h1>Ajouter un contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <label>Nom</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')<p class="error">{{ $message }}</p>@enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')<p class="error">{{ $message }}</p>@enderror

    <label>Téléphone</label>
    <input type="text" name="phone" value="{{ old('phone') }}">
    @error('phone')<p class="error">{{ $message }}</p>@enderror

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('contacts.index') }}">Annuler</a>
</form>

@endsection