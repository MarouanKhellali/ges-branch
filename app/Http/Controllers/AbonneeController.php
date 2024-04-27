<?php

namespace App\Http\Controllers;



use App\Models\Abonnee;
use App\Models\Tournee;
use Illuminate\Http\Request;

class AbonneeController extends Controller
{
    public function index()
    {
        $abonnees = Abonnee::with('tournees')->get();
        return view('abonnees.index', compact('abonnees'));
    }

    public function create()
    {
        $tournees = Tournee::all();
        return view('abonnees.create' , compact('tournees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string', // Change numeric to string if you're storing phone numbers as strings
            'tournee_id' => 'required|exists:tournees,id',
        ]);
    
        Abonnee::create($validatedData);
    
        return redirect()->route('abonnees.index');
    }
    public function show(Abonnee $abonnee)
    {
        $tournee = $abonnee->tournees()->first();
        return view('abonnees.show', compact('abonnee' , 'tournee'));
    }
    public function edit(Abonnee $abonnee)
    {
        $tournees = Tournee::all();
        return view('abonnees.edit', compact('abonnee', 'tournees'));
    }

    public function update(Request $request, Abonnee $abonnee)
    {

        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'cne' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|numeric|',
            'tournee_id' => 'required|exists:tournees,id',
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
