@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Tournee Details</h1>
        <p><strong>ID:</strong> {{ $tournee->id }}</p>
        <p><strong>Label:</strong> {{ $tournee->label }}</p>
        <p><strong>Abonnee:</strong> {{ $abonnee->nom }} {{ $abonnee->prenom }}</p>
        <a href="{{ route('tournees.index') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition mt-4">Back to
            Tournees</a>
    </div>
@endsection
