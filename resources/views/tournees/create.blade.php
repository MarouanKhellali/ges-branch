@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Create Tournee</h1>
        <form action="{{ route('tournees.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="label" class="block text-sm font-medium text-gray-700">Label:</label>
                <input type="text" id="label" name="label"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="abonnee_id" class="block text-sm font-medium text-gray-700">Abonnee:</label>
                <select id="abonnee_id" name="abonnee_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach ($abonnees as $abonnee)
                        <option value="{{ $abonnee->id }}">{{ $abonnee->nom }} {{ $abonnee->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Creat</button>
                <a href="{{ route('tournees.index') }}"
                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection
