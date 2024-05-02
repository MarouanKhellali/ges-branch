@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Branchements Details</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
              <tr>
                <th class="py-3 px-4 uppercase font-medium text-sm">Title</th>
                <th class="py-3 px-4 uppercase font-medium text-sm">Data</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              
              <tr>
                <td class="py-3 px-4"><strong>Order</strong>  </td>
                <td class="py-3 px-4">{{ $branchement->n_order }}</td>
              </tr>
              <tr class="border-t border-gray-200" >
                <td class="py-3 px-4"><strong>Police</strong></td>
                <td class="py-3 px-4">{{ $branchement->n_police }}</td>
              </tr>
              <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Nom</strong></td>
                  <td class="py-3 px-4">{{ $branchement->abonnees->nom }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Tournee</strong></td>
                  <td class="py-3 px-4">{{ $branchement->tournee}}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Adresse</strong></td>
                  <td class="py-3 px-4">{{ $branchement->adresse_branch }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Nature B</strong></td>
                  <td class="py-3 px-4">{{ $branchement->nature }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>L branchment</strong></td>
                  <td class="py-3 px-4">{{ $branchement->l_branch }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>L chassuée</strong></td>
                  <td class="py-3 px-4">{{ $branchement->l_chaussée }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Nature chassuée</strong></td>
                  <td class="py-3 px-4">{{ $branchement->nature_chaussée }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Date versement</strong></td>
                  <td class="py-3 px-4">{{ $branchement->date_ver }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>N° versement</strong></td>
                  <td class="py-3 px-4">{{ $branchement->n_ver }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Date Reglement</strong></td>
                  <td class="py-3 px-4"> {{ $branchement->date_reg }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Date Realisation</strong></td>
                  <td class="py-3 px-4">{{ $branchement->date_realisation }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>DN cond</strong></td>
                  <td class="py-3 px-4">{{ $branchement->dn_cond }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>N° Série</strong></td>
                  <td class="py-3 px-4">{{ $branchement->n_serie }}</td>
                </tr>
                <tr class="border-t border-gray-200" >
                  <td class="py-3 px-4"><strong>Observation</strong></td>
                  <td class="py-3 px-4"> {{ $branchement->observation }}</td>
                </tr>
                
  
              
                
              
            </tbody>
          </table>
        
          <button onclick="printPage()">Print</button>


        <a href="{{ route('branchements.index') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition mt-4">Back to
            Branchements</a>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
<!-- html2canvas library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script>

  function printPage() {
    window.print();
}
</script>

