@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Nouveau Branchement</h1>
        <form action="{{ route('branchements.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="n_order" class="block text-sm font-medium text-gray-700">Order:</label>
                <input type="text" id="n_order" name="n_order"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="n_police" class="block text-sm font-medium text-gray-700">Police:</label>
                <input type="text" id="n_police" name="n_police"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="n_abonnee" class="block text-sm font-medium text-gray-700">Nom:</label>
                <select id="n_abonnee" name="n_abonnee" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach ($abonnees as $abonnee)
                        <option value="{{ $abonnee->id }}">{{ $abonnee->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="n_tournee" class="block text-sm font-medium text-gray-700">Tournee:</label>
                <select id="n_tournee" name="n_tournee"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach ($tournees as $tournee)
                        <option value="{{ $tournee->id }}">{{ $tournee->label }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="adresse_branch" class="block text-sm font-medium text-gray-700">Adresse:</label>
                <input type="text" id="adresse_branch" name="adresse_branch"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="nature" class="block text-sm font-medium text-gray-700">Nature:</label>
                <input type="text" id="nature" name="nature"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="l_branch" class="block text-sm font-medium text-gray-700">L Branch</label>
                <input type="text" id="l_branch" name="l_branch"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="l_chaussée" class="block text-sm font-medium text-gray-700">L Chaussée</label>
                <input type="text" id="l_chaussée" name="l_chaussée"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="nature_chaussée" class="block text-sm font-medium text-gray-700">Nature Chaussée</label>
                <input type="text" id="nature_chaussée" name="nature_chaussée"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="date_ver" class="block text-sm font-medium text-gray-700">Date Versement</label>
                <input type="date" id="date_ver" name="date_ver"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="n_ver" class="block text-sm font-medium text-gray-700">N° versement </label>
                <input type="text" id="n_ver" name="n_ver"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="date_reg" class="block text-sm font-medium text-gray-700">Date Réglement </label>
                <input type="date" id="date_reg" name="date_reg"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="date_realisation" class="block text-sm font-medium text-gray-700">Date Réalisation</label>
                <input type="date" id="date_realisation" name="date_realisation"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="dn_cond" class="block text-sm font-medium text-gray-700">DN Cond</label>
                <input type="text" id="dn_cond" name="dn_cond"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="n_serie" class="block text-sm font-medium text-gray-700">N° Serie</label>
                <input type="text" id="n_serie" name="n_serie"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="observation" class="block text-sm font-medium text-gray-700">Obsérvation</label>
                <input type="text" id="nature_chaussée" name="observation"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>

            <div class="flex items-center justify-end">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Create</button>
                <a href="{{ route('branchements.index') }}"
                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection