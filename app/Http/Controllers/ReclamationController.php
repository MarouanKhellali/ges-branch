<?php

namespace App\Http\Controllers;

use App\Models\Branchement;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::with( 'branchments')->get();
        return view('reclamations.index', compact('reclamations'));
    }

    public function create()
    {
        $branchements = Branchement::all();
        return view('reclamations.create', compact('branchements')); // Pass branchements to the view
    }

    public function store(Request $request)
    {
        $branchement = Branchement::where('n_police', $request->n_police)->first();
        $request->validate([
            'police_rec' => 'required|integer',
            'nature_rec' => 'required|string',
            'tournee' => 'required|string',

            'adresse_rec' => 'required|string',

            



            'date_rec' => 'required|date',
            'date_rep' => 'required|date',

            'branchement_id' => 'required|exists:branchements,id',

        ]);
         // Add 'name' field to validated data if $branchment exists
    if ($branchement) {
        $validatedData['branchement_id'] = $branchement->id;
    }

    Branchement::create($validatedData);

    return redirect()->route('reclamation.index')->with('success', 'reclamation created successfully.');

       
    }

    public function edit(Reclamation $reclamation)
    {
        $branchements = Branchement::all(); // Fetch all branchements
        return view('reclamations.edit', compact('reclamation', 'branchements'));
    }

    public function update(Request $request, Reclamation $reclamation)
    {
        $validatedData =$request->validate([
            'police_rec' => 'required|integer',
            'nature_rec' => 'required|string',
            'tournee' => 'required|string',

            'adresse_rec' => 'required|string',

            



            'date_rec' => 'required|date',
            'date_rep' => 'required|date',

            'branchement_id' => 'required|exists:branchements,id',

        ]);

        $reclamation->update($validatedData);

        return redirect()->route('reclamations.index')->with('success', 'Reclamation updated successfully.');
    }

    public function show(Reclamation $reclamation)
    {
        $branchments = $reclamation->branchments;
        return view('branchements.show', compact('branchement',  'branchments'));   
     }

    

    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation deleted successfully.');
    }
}
