<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use App\Models\Enums\AccountType;

class VehiculeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin', 'client', 'employe'], ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all()
        ->map(function ($vehicule) {
            return [
                'uuid' => $vehicule->uuid,
                'type' => $vehicule->type,
                'permis' => $vehicule->permis,
<<<<<<< HEAD
                'marque' => $vehicule->marque,
                'created_at' => $vehicule->created_at,
                // 'image_url' => str_replace('http://localhost', 'http://127.0.0.1:8000', $vehicule->getFirstMediaUrl('annonces_images')),
=======
                'marque' => $vehicule->marque
>>>>>>> a73d7c14a10d488ad9d29089c152db2e2a27ff09
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('vehicule.index', [ 'vehicules' => $vehicules ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicule.create-vehicule');
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
            'type' => 'required|string|max:255',
            'permis' => 'required|string|max:255',
            'marque' => 'required|string|max:255',
        ]);
<<<<<<< HEAD

        $team = Team::where('type', AccountType::LOUEUR)->first();
        
        $vehicule = $team->vehicules()->create($validated);

        if ($request->hasFile('image')) {
            $vehicule->addMediaFromRequest('image')->toMediaCollection('vehicules_images');
        }
=======
        
        $vehicule = auth()->user()->vehicules()->create($validated);
>>>>>>> a73d7c14a10d488ad9d29089c152db2e2a27ff09

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
        return view('vehicule.vehicule-details', [ 'vehicule' => $vehicule ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        return view('vehicule.edit-vehicule' [ 'vehicule' => $vehicule ]);
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
