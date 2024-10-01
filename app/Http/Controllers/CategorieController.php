<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::all();
       
        return view('categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('categorie.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

        'nom'=>'required',
        'description'=>'required'


        ]);
    $categorie=new Categorie();
    $categorie->nom=$request->nom;
    $categorie->description=$request->description;
    $categorie->save();
   
    return redirect()->route('categorie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        // $categorie=Categorie::find($categorie->id);
        return view('categorie.detail',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('categorie.edite',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)

    {
        
    $categorie->nom=$request->nom;
    $categorie->description=$request->description;
    $categorie->save();
    return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }

}
