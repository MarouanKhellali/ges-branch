@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 gap-4 mb-4 ">

        {{-- <div class=" h-48">
            <a href="{{ route('tournees.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Tournees</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div> --}}
        <div class=" h-48">
            <a href="{{ route('branchements.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Branchements</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div>
        <div class=" h-48">
            <a href="{{ route('reclamations.index') }}"
                class="w-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Reclamations</h5>
                <p class="font-normal text-gray-700 ">.</p>
            </a>
        </div>



    </div>
@endsection
