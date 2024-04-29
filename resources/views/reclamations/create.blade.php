@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-6"> Reclamation</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="border-t border-gray-200">
                <form action="{{ route('reclamations.store') }}" method="POST" class="space-y-6 px-4 py-5 sm:px-6">
                    @csrf
                    
                    <div>
                        <label for="branchement_id" class="block text-sm font-medium text-gray-700">Police</label>
                        <input id="branchement_id" name="branchement_id" type="text" placeholder="Enter Police" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    <div>
                        <label for="tournee" class="block text-sm font-medium text-gray-700">Tournee</label>
                        <input id="tournee" name="tournee" type="text" placeholder="Enter Tournee" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    
                    <div>
                        <label for="date_rec" class="block text-sm font-medium text-gray-700">Date Réclamation</label>
                        <input type="date" id="date_rec" name="date_rec" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    
                    
                    <div>
                        <label for="date_creation" class="block text-sm font-medium text-gray-700">Date Creation</label>
                        <input type="date" id="date_creation" name="date_creation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Create</button>
                        <a href="{{ route('reclamations.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest shadow-sm hover:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
