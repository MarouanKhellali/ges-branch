@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mt-8 mb-4">Reclamations</h1>
       
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form action="#" method="get">
                    <div class="relative  ">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="search" id="searchInput" name="rechercher"
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg  w-64 focus:ring-blue-500 focus:border-blue-500 outline-none "
                            placeholder="Rechercher">
                    </div>
                </form>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href="{{ route('reclamations.create') }}">
                    <div type="button"
                        class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Nouveau Réclamation
                    </div>
                </a>
            </div>
        </div>

        @if ($reclamations->isEmpty())
            <p>No reclamations found.</p>
        @else
        <div class=" overflow-x-auto shadow-md sm:rounded-lg mb-5">
            <table id="my-table" class="w-full text-sm text-left text-gray-500 border  bg-dark ">
                <thead class="text-xs text-gray-100 uppercase bg-gray-500 px-4 ">
                    <tr>
    
                        
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Date Creation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Branchement
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($reclamations as $reclamation)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap ">
                                <div class="text-base font-semibold">
                                    {{ $reclamation->id }}
                                </div>
                            </th>
    
                            <td class="px-6 py-4">
                                {{ $reclamation->type }}
                            </td>
    
                            <td class="px-6 py-4">
                                {{ $reclamation->date_creation }}
                            </td>
                        
                            
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
        </div>
            
        @endif
    </div>
    



<!-- Script to filter table rows based on search input -->
<script>
// Get the search input element
var searchInput = document.getElementById("searchInput");

// Add event listener to the search input
searchInput.addEventListener("keyup", function() {
    // Get the search value and convert it to lowercase
    var searchValue = this.value.toLowerCase();

    // Get all table rows in the tbody
    var rows = document.querySelectorAll("#my-table tbody tr");
    var rows = document.querySelectorAll("#my-table tbody tr");

    // Loop through each row and hide/show based on search value
    rows.forEach(function(row) {
        // Get the text content of each cell in the row
        var rowData = row.textContent.toLowerCase();

        // Check if the search value is found in the row data
        if (rowData.includes(searchValue)) {
            // Show the row if the search value is found
            row.style.display = "";
        } else {
            // Hide the row if the search value is not found
            row.style.display = "none";
        }
    });
});
</script>
    
@endsection
