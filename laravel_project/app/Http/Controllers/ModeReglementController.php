<?php

namespace App\Http\Controllers;

use App\Models\ModeReglement;
use App\Http\Requests\ModeReglementRequest;
class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modereglements = ModeReglement::all();
        return view('modereglement.index', compact ('modereglements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modereglement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModeReglementRequest $request)
    {
        ModeReglement::create($request->all());
        return redirect()->route('modereglements.index')->with('success', 'modereglement create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModeReglement $modereglement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModeReglement $modereglement)
    {
        return view('modereglement.edit', compact('modereglement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModeReglementRequest $request, ModeReglement $modereglement)
    {
        $modereglement->update($request->all());
        return redirect()->route('modereglements.index')->with('success', 'modereglement update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModeReglement $modereglement)
    {
        $modereglement->delete();
        return redirect()->route('modereglement.index');
    }
}
