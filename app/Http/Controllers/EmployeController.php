<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = employe::all()
        ->map(function ($employe) {
            return [
                'uuid' => $employe->uuid,
                'type' => $employe->type,
                'marque' => $employe->marque,
                'created_at' => $employe->created_at,
                'updated_at' => $employe->updated_at,
                'image_url' => str_replace('http://localhost', 'http://127.0.0.1:8000', $employe->getFirstMediaUrl('employes_images')),
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('employe', [ 'employes' => $employes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-employe');
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
        
        $employe = auth()->user()->employes()->create($validated);

        if ($request->hasFile('image')) {
            $employe->addMediaFromRequest('image')->toMediaCollection('employes_images');
        }

        if( $employe ){
            return back()->withSuccess('Enregistré !');
        }

        return back()->with('error', 'Une erreur s\'est produite !!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(employe $employe)
    {
        return view('employe', [ 'employe' => $employe ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(employe $employe)
    {
        return view('edit-employe' [ 'employe' => $employe ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employe $employe)
    {
        if( auth()->user()->is( $employe->user ) ){
            $employe->update();
            return back()->withSuccess('Mise à jour !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
        return view('edit-employe' [ 'employe' => $employe ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(employe $employe)
    {
        if( auth()->user()->is( $employe->user ) ){
            $employe->delete();
            return back()->withSuccess('Supprimmée !');
        }
        return back()->with('error', 'Une erreur s\'est produite !!');
    }
}
