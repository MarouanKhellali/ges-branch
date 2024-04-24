@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Abonnee Details</h1>
        <p><strong>ID:</strong> {{ $abonnee->id }}</p>
        <p><strong>Tournee:</strong> {{ $tournee->label }} </p>
        <p><strong>Nom:</strong> {{ $abonnee->nom }}</p>
        <p><strong>Prenom:</strong> {{ $abonnee->prenom }}</p>
        <p><strong>Telephone:</strong> {{ $abonnee->telephone }}</p>
        <a href="{{ route('abonnees.index') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition mt-4">Back to
            Abonnees</a>
    </div>
@endsection