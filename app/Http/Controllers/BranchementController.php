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
        $branchements = Branchement::with( 'abonnees')->get();
        return view('branchements.index', compact('branchements'));
    }

    public function create()
    {
        $abonnees = Abonnee::all();
        
        return view('branchements.create', compact('abonnees'));
    }

    public function store(Request $request)
{
    $abonnee = Abonnee::where('cne', $request->cne)->first();

    $validatedData = $request->validate([
        'n_order' => 'required|integer',
        'n_police' => 'required|string',
        'tournee' => 'required|string',
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
    ]);

    // Add 'name' field to validated data if $abonnee exists
    if ($abonnee) {
        $validatedData['n_abonnee'] = $abonnee->id;
    }

    Branchement::create($validatedData);

    return redirect()->route('branchements.index')->with('success', 'Branchement created successfully.');
}

    public function show(Branchement $branchement)
    {
        
        $abonnees = $branchement->abonnees;
        return view('branchements.show', compact('branchement',  'abonnees'));    }

    public function edit(Branchement $branchement)
    {
        
    $abonnees = Abonnee::all(); // Fetch all abonnes
    return view('branchements.edit', compact('branchement', 'abonnees'));
    }

    public function update(Request $request, Branchement $branchement)
    {
        $validatedData = $request->validate([
            'n_order' => 'required|integer',
            'n_police' => 'required|string',
            'tournee' => 'required|string',
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
             
            'n_abonnee' => 'required|exists:abonnees,id'  
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