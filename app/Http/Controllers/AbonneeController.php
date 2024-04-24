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
        Abonnee::create($request->all());
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
        $abonnee->update($request->all());
        return redirect()->route('abonnees.index');
    }

    public function destroy(Abonnee $abonnee)
    {
        $abonnee->delete();
        return redirect()->route('abonnees.index');
    }
}
