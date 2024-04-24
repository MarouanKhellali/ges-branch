@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Branchements Details</h1>
        <p><strong>ID:</strong> {{ $branchement->id }}</p>
        <p><strong>Order:</strong> {{ $branchement->n_order }}</p>
        <p><strong>Police:</strong> {{ $branchement->n_police }}</p>
        <p><strong>Tournee:</strong> {{ $branchement->n_tournee }}</p>
        <p><strong>Nature:</strong> {{ $branchement->nature }}</p>
        <a href="{{ route('branchements.index') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition mt-4">Back to
            Branchements</a>
    </div>
@endsection
