<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Http\Requests\MarqueRequest;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marque::all();
        return view('marque.index', compact ('marques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marque.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarqueRequest $request)
    {
        Marque::create($request->all());
        return redirect()->route('marques.index')->with('success', 'marque create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marque $marque)
    {
        return view('marque.edit', compact('marque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarqueRequest $request, Marque $marque)
    {
        $marque->update($request->all());
        return redirect()->route('marques.index')->with('success', 'marque update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return redirect()->route('marques.index');
    }
}
