<?php

namespace App\Http\Controllers;

use App\Models\Abonnee;
use App\Models\Tournee;
use Illuminate\Http\Request;

class TourneeController extends Controller
{
    public function index()
    {
        $tournees = Tournee::all();
        return view('tournees.index', compact('tournees'));
    }

    public function create()
    {
        $abonnees = Abonnee::all();
        return view('tournees.create', compact('abonnees'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'abonnee_id' => 'required|exists:abonnees,id'
        ]);

        Tournee::create($validatedData);

        return redirect()->route('tournees.index')->with('success', 'Tournee created successfully.');
    }

    public function show(Tournee $tournee)
    {
        $abonnee = $tournee->abonnee()->first();
        return view('tournees.show', compact('tournee', 'abonnee'));
    }


    public function edit(Tournee $tournee)
    {
        $abonnees = Abonnee::all();
        return view('tournees.edit', compact('tournee', 'abonnees'));
    }

    public function update(Request $request, Tournee $tournee)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            'abonnee_id' => 'required|exists:abonnees,id'
        ]);

        $tournee->update($validatedData);

        return redirect()->route('tournees.index')->with('success', 'Tournee updated successfully.');
    }

    public function destroy(Tournee $tournee)
    {
        $tournee->delete();
        return redirect()->route('tournees.index')->with('success', 'Tournee deleted successfully.');
    }
}
