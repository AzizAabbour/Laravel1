@extends('contacts.layout')
@section('content')

<h1>Liste des contacts</h1>

@if(session('success'))
    <div class="alert">{{ session('success') }}</div>
@endif

<p><a href="{{ route('contacts.create') }}" class="btn btn-primary">
    + Nouveau contact
</a></p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact) }}"
                   class="btn btn-warning">Modifier</a>

                <form action="{{ route('contacts.destroy', $contact) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"
                        onclick="return confirm('Supprimer ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection