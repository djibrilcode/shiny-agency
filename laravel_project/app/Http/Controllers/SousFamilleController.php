<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Request;
use App\Models\SousFamille;
use App\Http\Requests\SousFamilleRequest;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\DB;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sousfamilles = SousFamille::all();
        return view('sous_famille.index', compact ('sousfamilles'));
        // $sfamille = DB::table('sous_familles')->join('familles', 'famille_id', '=', 'sous_familles.famille_id')->get();
        // dd($sfamille);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sous_famille.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SousFamilleRequest $request)
    {
        SousFamille::create($request->all());
        return redirect()->route('sous_familles.index')->with('success', 'sousfamille create successeful');
    }

    /**
     * Display the specified resource.
     */
    public function show(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sousfamille $sousfamille)
    {
        return view('sous_famille.edit', compact('sousfamille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SousFamilleRequest $request, Sousfamille $sousfamille)
    {
        $sousfamille->update($request->all());
        return redirect()->route('sous_familles.index')->with('success', 'sousfamille update successeful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SousFamille $sousfamille)
    {
        $sousfamille->delete();
        return redirect()->route('sous_familles.index');
    }
}
