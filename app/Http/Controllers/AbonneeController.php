<?php

namespace App\Http\Controllers;

use App\Models\Abonnee;
use Illuminate\Http\Request;

class AbonneeController extends Controller
{
    public function index()
    {
        $abonnees = Abonnee::all();
        return view('abonnees.index', compact('abonnees'));
    }
    public function getAbonneeInfo(Request $request)
{
    // Retrieve the abonnee data based on the CNE sent via the request
    $abonnee = Abonnee::where('cne', $request->cne)->first();

    // Check if abonnee exists
    if ($abonnee) {
        // Return the abonnee data as JSON
        return response()->json([
            'nom' => $abonnee->nom,
            'adresse' => $abonnee->adresse,
        ]);
    } else {
        // Return an error response if abonnee not found
        return response()->json([
            'error' => 'Abonnee not found.',
        ], 404);
    }
}

    public function create()
    {
        return view('abonnees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'police_abonnee' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string', 
        ]);

        Abonnee::create($validatedData);

        return redirect()->route('abonnees.index');
    }

    public function show(Abonnee $abonnee)
    {
        return view('abonnees.show', compact('abonnee'));
    }

    public function edit(Abonnee $abonnee)
    {
        return view('abonnees.edit', compact('abonnee'));
    }

    public function update(Request $request, Abonnee $abonnee)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'police_abonnee' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string', 
        ]);
        $abonnee->update($validatedData);
        return redirect()->route('abonnees.index');
    }

    public function destroy(Abonnee $abonnee)
    {
        $abonnee->delete();
        return redirect()->route('abonnees.index');
    }
}