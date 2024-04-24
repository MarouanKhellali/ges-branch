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
       
        return view('tournees.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            
        ]);

        Tournee::create($validatedData);

        return redirect()->route('tournees.index')->with('success', 'Tournee created successfully.');
    }

    public function show(Tournee $tournee)
    {
        
        return view('tournees.show', compact('tournee'));
    }


    public function edit(Tournee $tournee)
    {
        
        return view('tournees.edit', compact('tournee',));
    }

    public function update(Request $request, Tournee $tournee)
    {
        $validatedData = $request->validate([
            'label' => 'required|string|max:255',
            
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
