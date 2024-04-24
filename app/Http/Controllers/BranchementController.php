<?php
namespace App\Http\Controllers;

use App\Models\Tournee;
use App\Models\Branchement;
use Illuminate\Http\Request;

class BranchementController extends Controller
{
    public function index()
    {
        $branchements = Branchement::with('tournees')->get();
        return view('branchements.index', compact('branchements'));
    }

    public function create()
    {
        $tournees = Tournee::all();
        return view('branchements.create', compact('tournees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'nature' => 'required|string',
            'n_tournee' => 'required|exists:tournees,id'
        ]);

        Branchement::create($validatedData);

        return redirect()->route('branchements.index')->with('success', 'Branchement created successfully.');
    }

    public function show(Branchement $branchement)
    {
        $tournee = $branchement->tournees()->first();
        return view('branchements.show', compact('branchement', 'tournee'));
    }

    public function edit(Branchement $branchement)
    {
        $tournees = Tournee::all();
        return view('branchements.edit', compact('branchement', 'tournees'));
    }

    public function update(Request $request, Branchement $branchement)
    {
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'nature' => 'required|string',
            'n_tournee' => 'required|exists:tournees,id'
        ]);

        $branchement->update($validatedData);

        return redirect()->route('branchements.index')->with('success', 'Branchement updated successfully.');
    }

    public function destroy(Branchement $branchement)
    {
        $branchement->delete();
        return redirect()->route('branchements.index')->with('success', 'Branchement deleted successfully.');
    }
}