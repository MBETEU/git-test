<?php

namespace App\Http\Controllers;

use App\Models\Centre_donneur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('centres.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('centres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'nom'  => 'required',
            'ville'  => 'required',
            'adresse'  => 'required',
            'tel' => 'required',
            'email' => 'required',
            'horaire'=>'required'
        ]);
        $centre = new Centre_donneur();
        $centre->nom = $request->nom;
        $centre->adresse = $request->adresse;
        $centre->telephone = $request->tel;
        $centre->email = $request->email;
        $centre->ville = $request->ville;
        $centre->horaire = $request->horaire;
        
        $centre->save();
        return redirect()->route('centre.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $centre = Centre_donneur::findOrFail($id);
        return view('centres.edit',compact('centre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $centre= DB::table('centre_donneurs')
            ->where('id', $id)
            ->update([
                'nom'=>$request->nom,
                'ville'=>$request->ville,
                'adresse'=>$request->adresse,
                'telephone'=>$request->tel,
                'email'=>$request->email,
                'horaire'=>$request->horaire,
            ]);   
            return view('centres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $centre = Centre_donneur::findOrFail($id);

      if($centre->delete())
      {
        return view('centres.index');
      }
    }
}
