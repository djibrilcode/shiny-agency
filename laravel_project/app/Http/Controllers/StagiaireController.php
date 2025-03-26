<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagiaireRequest;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        $stagiaires = Stagiaire::paginate(10);
        return view ('stagiaire.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StagiaireRequest $request)
    {
        Stagiaire::create($request->all());
        return redirect()->route('stagiaires.index')->with('success', 'stagiaire created successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        return view('stagiaire.edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StagiaireRequest $request, Stagiaire $stagiaire)
    {
        $stagiaire->update($request->all());
        return redirect()->route('stagiaires.index')->with('success', 'stagiaire updated successful.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
        return redirect()->route('stagiaires.index');
    }
}
