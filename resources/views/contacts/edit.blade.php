@extends('contacts.layout')
@section('content')

<h1>Modifier le contact</h1>

<form action="{{ route('contacts.update', $contact) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom</label>
    <input type="text" name="name"
           value="{{ old('name', $contact->name) }}">
    @error('name')<p class="error">{{ $message }}</p>@enderror

    <label>Email</label>
    <input type="email" name="email"
           value="{{ old('email', $contact->email) }}">
    @error('email')<p class="error">{{ $message }}</p>@enderror

    <label>Téléphone</label>
    <input type="text" name="phone"
           value="{{ old('phone', $contact->phone) }}">
    @error('phone')<p class="error">{{ $message }}</p>@enderror

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <a href="{{ route('contacts.index') }}">Annuler</a>
</form>

@endsection