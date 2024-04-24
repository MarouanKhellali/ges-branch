@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mt-8 mb-4">Reclamations</h1>
        <div class="flex items-center mb-4">
            <form class="flex items-center mr-4">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-64 pl-10 p-2"
                        placeholder="Search" required="">
                </div>
            </form>
            <a href="{{ route('reclamations.create') }}"
                class="btn btn-primary flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Create New Reclamation
            </a>
        </div>

        @if ($reclamations->isEmpty())
            <p>No reclamations found.</p>
        @else
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Type
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date Creation
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Branchement
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($reclamations as $reclamation)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reclamation->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reclamation->type }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reclamation->date_creation }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reclamation->branchement->tournees->abonnee->nom }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button id="{{ $reclamation->id }}-dropdown-button"
                                    data-dropdown-toggle="{{ $reclamation->id }}-dropdown"
                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="{{ $reclamation->id }}-dropdown"
                                    class="z-10 w-44 hidden bg-white rounded divide-y divide-gray-100 shadow">
                                    <ul class="py-1 text-sm text-gray-700"
                                        aria-labelledby="{{ $reclamation->id }}-dropdown-button">
                                        <li>
                                            <!-- Show button -->
                                            <a href="{{ route('reclamations.show', $reclamation->id) }}" data-bs-toggle="modal"
                                                data-bs-target="#showModal{{ $reclamation->id }}"
                                                class="block py-2 px-4 hover:bg-gray-100">Show</a>
                                        </li>
                                        <li>
                                            <!-- Edit button -->
                                            <a href="{{ route('reclamations.edit', $reclamation->id) }}" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $reclamation->id }}"
                                                class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <!-- Delete form -->
                                            <form action="{{ route('reclamations.destroy', $reclamation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-full text-start py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
