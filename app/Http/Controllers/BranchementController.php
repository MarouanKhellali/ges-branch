<?php
namespace App\Http\Controllers;

use App\Models\Abonnee;
use App\Models\Tournee;
use App\Models\Branchement;
use Illuminate\Http\Request;

class BranchementController extends Controller
{
    public function index()
    {
        $branchements = Branchement::with(['tournees', 'abonnees'])->get();
        return view('branchements.index', compact('branchements'));
    }

    public function create()
    {
        $abonnees = Abonnee::all();
        $tournees = Tournee::all();
        return view('branchements.create', compact('abonnees', 'tournees'));
    }

    public function store(Request $request)

    {
        
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'nature' => 'required|string',
            'l_branch' => 'required|string',
            'adresse_branch' => 'required|string',
            'l_chaussée' => 'required|string',
            'nature_chaussée' => 'required|string',
            'date_ver' => 'required|date',
            'n_ver' => 'required|string',
            'date_reg' => 'required|date',
            'date_realisation' => 'required|date',
            'dn_cond' => 'required|string',
            'n_serie' => 'required|string',
            'observation' => 'required|string',
            'n_tournee' => 'required|exists:tournees,id', // Change to 'n_tournee'
            'n_abonnee' => 'required|exists:abonnees,id'  // Change to 'n_abonnee'
        ]);
        
        Branchement::create($validatedData);


        return redirect()->route('branchements.index')->with('success', 'Branchement created successfully.');
    }

    public function show(Branchement $branchement)
    {
        $tournee = $branchement->tournees()->first();
        $abonnees = $branchement->abonnees;
        return view('branchements.show', compact('branchement', 'tournee', 'abonnees'));    }

    public function edit(Branchement $branchement)
    {
        $tournees = Tournee::all();
    $abonnees = Abonnee::all(); // Fetch all abonnes
    return view('branchements.edit', compact('branchement', 'tournees', 'abonnees'));
    }

    public function update(Request $request, Branchement $branchement)
    {
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'nature' => 'required|string',
            'l_branch' => 'required|string',
            'adresse_branch' => 'required|string',
            'l_chaussée' => 'required|string',
            'nature_chaussée' => 'required|string',
            'date_ver' => 'required|date',
            'n_ver' => 'required|string',
            'date_reg' => 'required|date',
            'date_realisation' => 'required|date',
            'dn_cond' => 'required|string',
            'n_serie' => 'required|string',
            'observation' => 'required|string',
            'n_tournee' => 'required|exists:tournees,id', // Change to 'n_tournee'
            'n_abonnee' => 'required|exists:abonnees,id'  // Change to 'n_abonnee'
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