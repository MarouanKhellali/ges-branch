<?php

namespace App\Http\Controllers;

use App\Models\Branchement;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::all();
        return view('reclamations.index', compact('reclamations'));
    }

    public function create()
    {
        $branchements = Branchement::all();
        return view('reclamations.create', compact('branchements')); // Pass branchements to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'nature_rec' => 'required',
            'date_rec' => 'required|date',
            'date_rep' => 'required|date',

            'branchement_id' => 'required|exists:branchements,id',
            'abonnee_id' => 'required|exists:abonnees,id',

        ]);

        Reclamation::create($request->all());

        return redirect()->route('reclamations.index')->with('success', 'Reclamation created successfully.');
    }

    public function edit(Reclamation $reclamation)
    {
        $branchements = Branchement::all(); // Fetch all branchements
        return view('reclamations.edit', compact('reclamation', 'branchements'));
    }

    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'nature_rec' => 'required',
            'date_rec' => 'required|date',
            'date_rep' => 'required|date',

            'branchement_id' => 'required|exists:branchements,id',
            'abonnee_id' => 'required|exists:abonnees,id',

        ]);

        $reclamation->update($request->all());

        return redirect()->route('reclamations.index')->with('success', 'Reclamation updated successfully.');
    }

    public function show(Reclamation $reclamation)
    {
        return view('reclamations.show', compact('reclamation'));
    }

    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect()->route('reclamations.index')->with('success', 'Reclamation deleted successfully.');
    }
}
