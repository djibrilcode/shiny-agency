<?php

namespace App\Http\Controllers;

use App\Models\Unite;
use App\Http\Requests\UniteRequest;
class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unites = Unite::all();
        return view('unite.index', compact ('unites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniteRequest $request)
    {
        Unite::create($request->all());
        return redirect()->route('unites.index')->with('success', 'unite create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unite $unite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unite $unite)
    {
        return view('unite.edit', compact('unite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UniteRequest $request, Unite $unite)
    {
        $unite->update($request->all());
        return redirect()->route('unites.index')->with('success', 'unite update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unite $unite)
    {
        $unite->delete();
        return redirect()->route('unites.index');
    }
}
