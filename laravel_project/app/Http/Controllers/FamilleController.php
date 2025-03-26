<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilleRequest;
use App\Models\Famille;
use Illuminate\Support\Facades\DB ;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles = Famille::all();
        return view('famille.index', compact ('familles'));
        // $famille = DB::table('familles')->whereId( 4)->get();
        // dd($famille);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('famille.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamilleRequest $request)
    {
        Famille::create($request->all());
        return redirect()->route('familles.index')->with('success', 'famille create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        return view('famille.edit', compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FamilleRequest $request, Famille $famille)
    {
        $famille->update($request->all());
        return redirect()->route('familles.index')->with('success', 'famille update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();
        return redirect()->route('familles.index')->with('delete', 'Famille deleted successful');
    }
}
