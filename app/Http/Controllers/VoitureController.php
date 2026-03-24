<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Employe; 

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::with('employe')->get();
    
        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_employe)
    {
        $employe = Employe::findOrFail($id_employe);
        return view('voitures.create', compact('employe'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouvelle_voiture = $request->validate([
            'modele' => 'required|string',
            'nb_places' => 'required|integer|min:1',
            'id_employe' => 'required' 
        ]);

        \App\Models\Voiture::create($nouvelle_voiture);

        return redirect()->route('employes.show', $request->id_employe);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voiture = Voiture::with('employe')->findOrFail($id);

        return view('voitures.show', compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
