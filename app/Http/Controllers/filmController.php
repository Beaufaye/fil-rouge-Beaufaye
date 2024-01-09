<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function film()
    {
        $film = film::all();
        return view('film', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajfilm()
    {
        return view('ajfilm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function filmst(Request $request)
    {
        $film= new film();
        $film->nom = $request->nom;
        $film->duree = $request->duree;
        $film->type = $request->type;
        $film->description = $request->description;
        $film->jour = $request->jour;
        $film->heure = $request->heure;
        $film->version = $request->version;
        // $film->image = $request->image->store('photo', 'public', 'app');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Uploads/photos/', $filename);
            $film->image = $filename;
        }else {
            return $request;
            $film->image = '';
        }
        $film->lien = $request->lien;
       

        $film->save();

        return redirect('film')->with('status', 'Le film a bien été ajouté.');
    }

    
    public function update_film($id)
    {
        $film = film::find($id);
       return view('mod_film', compact('film'));
    }

    public function upfilm(Request $request){
        
        $film = film::find($request->id);
        $film->nom = $request->nom;
        $film->duree = $request->duree;
        $film->type = $request->type;
        $film->description = $request->description;
        $film->jour = $request->jour;
        $film->heure = $request->heure;
        $film->version = $request->version;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Uploads/photos/', $filename);
            $film->image = $filename;
        }else {
            return $request;
            $film->image = '';
        }
        $film->lien = $request->lien;
       
        $film->update();

        return redirect('film')->with('status', 'Le film a bien été modifié.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = film::find($id);
        $film->delete();
        return redirect('film')->with('status', 'Le film a bien été supprimé.');
    }
}
