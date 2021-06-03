<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $employes = User::all()
        ->map(function ($employe) {
            return [
                'uuid' => $employe->uuid,
                'first_name' => $employe->first_name,
                'last_name' => $employe->last_name,
                'email' => $employe->email,
                'created_at' => $employe->created_at,
            ];
        })
        // ->whereNotNull('published_at')
        ->sortBy('created_at');
        return view('employe.index', [ 'employes' => $employes ]);
    }

}
