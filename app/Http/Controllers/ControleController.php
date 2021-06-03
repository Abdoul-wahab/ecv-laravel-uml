<?php

namespace App\Http\Controllers;

use App\Models\Controle;
use Illuminate\Http\Request;

class ControleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $controles = Controle::all()
        ->map(function ($controle) {
            return [
                'uuid' => $controle->uuid,
                'type' => $controle->type,
                'marque' => $controle->marque,
                'created_at' => $controle->created_at,
                'updated_at' => $controle->updated_at,
                'image_url' => str_replace('http://localhost', 'http://127.0.0.1:8000', $controle->getFirstMediaUrl('controles_images')),
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('controle.index', [ 'controles' => $controles ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controle.create-controle');
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
        
        $controle = auth()->user()->controles()->create($validated);

        if ($request->hasFile('image')) {
            $controle->addMediaFromRequest('image')->toMediaCollection('controles_images');
        }

        if( $controle ){
            return back()->withSuccess('Enregistré !');
        }

        return back()->with('error', 'Une erreur s\'est produite !!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function show(Controle $controle)
    {
        return view('controle.controle-details', [ 'controle' => $controle ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function edit(Controle $controle)
    {
        return view('controle.edit-controle' [ 'controle' => $controle ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Controle $controle)
    {
        if( auth()->user()->is( $controle->user ) ){
            $controle->update();
            return back()->withSuccess('Mise à jour !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controle $controle)
    {
        if( auth()->user()->is( $controle->user ) ){
            $controle->delete();
            return back()->withSuccess('Supprimmée !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }
}
