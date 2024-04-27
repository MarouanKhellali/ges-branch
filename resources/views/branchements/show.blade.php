@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Branchements Details</h1>
        <p><strong>Order:</strong> {{ $branchement->n_order }}</p>
        <p><strong>Police:</strong> {{ $branchement->n_police }}</p>
        <p><strong>Nom:</strong> {{ $branchement->abonnees->nom }}</p>
        <p><strong>Tournee:</strong> {{ $branchement->tournees->label}}</p>
        <p><strong>Adresse:</strong> {{ $branchement->adresse_branch }}</p>
        <p><strong>Nature B:</strong> {{ $branchement->nature }}</p>
        <p><strong>L branchment:</strong> {{ $branchement->l_branch }}</p>
        <p><strong>L chassuée:</strong> {{ $branchement->l_chaussée }}</p>
        <p><strong>Nature chassuée:</strong> {{ $branchement->nature_chaussée }}</p>
        <p><strong>Date versement:</strong> {{ $branchement->date_ver }}</p>
        <p><strong>N° versement:</strong> {{ $branchement->n_ver }}</p>
        <p><strong>Date Reglement:</strong> {{ $branchement->date_reg }}</p>
        <p><strong>Date Realisation:</strong> {{ $branchement->date_realisation }}</p>
        <p><strong>DN cond:</strong> {{ $branchement->dn_cond }}</p>
        <p><strong>N° Série:</strong> {{ $branchement->n_serie }}</p>
        <p><strong>Observation:</strong> {{ $branchement->observation }}</p>
        

        <a href="{{ route('branchements.index') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition mt-4">Back to
            Branchements</a>
    </div>
@endsection

