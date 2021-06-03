<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = Contrat::all()
        ->map(function ($contrat) {
            return [
                'uuid' => $contrat->uuid,
                'type' => $contrat->type,
                'content' => $contrat->content
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('contrat.index', [ 'contrats' => $contrats ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrat.create-contrat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($data, [
            'prix' => ['required', 'number'],
            'content' => ['required', 'string', 'max:255'],
        ]);
        $validated = $request->validate([
            'prix' => 'required|number',
            'content' => 'required|string|max:255',
        ]);
        
        $contrat = auth()->user()->contrats()->create($validated);

        if( $contrat ){
            return back()->withSuccess('Enregistré !');
        }

        return back()->with('error', 'Une erreur s\'est produite !!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(contrat $contrat)
    {
        return view('contrat.contrat-details', [ 'contrat' => $contrat ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(contrat $contrat)
    {
        return view('contrat.edit-contrat' [ 'contrat' => $contrat ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contrat $contrat)
    {
        if( auth()->user()->is( $contrat->user ) ){
            $contrat->update();
            return back()->withSuccess('Mise à jour !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
        return view('contrat.edit-contrat' [ 'contrat' => $contrat ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        if( auth()->user()->is( $contrat->user ) ){
            $contrat->delete();
            return back()->withSuccess('Supprimmée !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }
}
