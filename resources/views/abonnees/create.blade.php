@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Create Abonnee</h1>
        <form action="{{ route('abonnees.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="tournee_id" class="block text-sm font-medium text-gray-700">Tournee:</label>
                <select id="tournee_id" name="tournee_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach ($tournees as $tournee)
                        <option value="{{ $tournee->id }}">{{ $tournee->label }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom:</label>
                <input type="text" id="nom" name="nom"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom:</label>
                <input type="text" id="prenom" name="prenom"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone:</label>
                <input type="text" id="telephone" name="telephone"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Create</button>
                <a href="{{ route('abonnees.index') }}"
                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection