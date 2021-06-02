<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = vehicule::all()
        ->map(function ($vehicule) {
            return [
                'uuid' => $vehicule->uuid,
                'type' => $vehicule->type,
                'marque' => $vehicule->marque,
                'created_at' => $vehicule->created_at,
                'updated_at' => $vehicule->updated_at,
                'image_url' => str_replace('http://localhost', 'http://127.0.0.1:8000', $vehicule->getFirstMediaUrl('vehicules_images')),
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('vehicule', [ 'vehicules' => $vehicules ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-vehicule');
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
        
        $vehicule = auth()->user()->vehicules()->create($validated);

        if ($request->hasFile('image')) {
            $vehicule->addMediaFromRequest('image')->toMediaCollection('vehicules_images');
        }

        if( $vehicule ){
            return back()->withSuccess('Enregistré !');
        }

        return back()->with('error', 'Une erreur s\'est produite !!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        return view('vehicule', [ 'vehicule' => $vehicule ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        return view('edit-vehicule' [ 'vehicule' => $vehicule ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        if( auth()->user()->is( $vehicule->user ) ){
            $vehicule->update();
            return back()->withSuccess('Mise à jour !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        if( auth()->user()->is( $vehicule->user ) ){
            $vehicule->delete();
            return back()->withSuccess('Supprimmée !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }
}
