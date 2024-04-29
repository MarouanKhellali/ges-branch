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