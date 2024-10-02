<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=Produit::all();
        return view('produit.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    $categories=Categorie::all();
      return view('produit.form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      
        $request->validate([
            'nom'=>'required',
            'prix'=>'required',
            'description'=>'required',
            'quantite'=>'required',
            'sttock'=>'required',
            'categorie_id'=>'required'
        ]);
        
        // $produit=new Produit();
        // $produit->nom=$request->nom;
        // $produit->prix=$request->prix;
        // $produit->description=$request->description;
        // $produit->categorie_id=$request->categorie_id;
        // $produit->save();
        Produit::create($request->all());
        return redirect()->route('produit.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
