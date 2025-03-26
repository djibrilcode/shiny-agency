<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Http\Requests\EtatRequest;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etat::all();
        return view('etat.index', compact ('etats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtatRequest $request)
    {
        Etat::create($request->all());
        return redirect()->route('etats.index')->with('success', 'etat create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etat $etat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etat $etat)
    {
        return view('etat.edit', compact('etat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtatRequest $request, Etat $etat)
    {
        $etat->update($request->all());
        return redirect()->route('etats.index')->with('success', 'etat update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etat $etat)
    {
        $etat->delete();
        return redirect()->route('etats.index')->with('supp', 'etat deleted successful');
    }
}
