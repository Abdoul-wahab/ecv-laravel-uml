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
                'marque' => $contrat->marque,
                'created_at' => $contrat->created_at,
                'updated_at' => $contrat->updated_at,
                'image_url' => str_replace('http://localhost', 'http://127.0.0.1:8000', $contrat->getFirstMediaUrl('contrats_images')),
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('contrat', [ 'contrats' => $contrats ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-contrat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'marque' => 'required|string',
            'image'  =>  'required|file',
        ]);
        
        $contrat = auth()->user()->contrats()->create($validated);

        if ($request->hasFile('image')) {
            $contrat->addMediaFromRequest('image')->toMediaCollection('contrats_images');
        }

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
        return view('contrat', [ 'contrat' => $contrat ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(contrat $contrat)
    {
        return view('edit-contrat' [ 'contrat' => $contrat ]);
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
        return view('edit-contrat' [ 'contrat' => $contrat ]);
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
