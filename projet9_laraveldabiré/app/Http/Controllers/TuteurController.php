<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\Etudiant;

class TuteurController extends Controller
{
    //liste tuteur
    public function liste_tuteur()
    {
        $tuteurs= Tuteur::all();
        // $etudiants= Etudiant::all();
        return view('tuteur.liste',compact('tuteurs'));
    }
    //ajout tuteur
    public function ajouter_tuteur()
    {
        return view('tuteur.ajouter');
    }
    public function ajouter_tuteur_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);
        $tuteur= new Tuteur();
        $tuteur->nom= $request->nom;
        $tuteur->prenom= $request->prenom;
        $tuteur->save();
        
        return redirect('/ajouter_tuteur')->with('status', 'Le tuteur a bien ete ajouter avec success');
        
    }
    //update tuteur
    public function update_tuteur($id)
    {
        $tuteur= Tuteur::find($id);
        $etudiants= Etudiant::all();
        return view('tuteur.update',
                    compact('tuteur','etudiants'));
        
    }
    public function update_tuteur_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);
        $tuteur=Tuteur::find($request->id);
        $tuteur->nom= $request->nom;
        $tuteur->prenom= $request->prenom;
        $tuteur->update();
        return redirect('/tuteur')->with('status', 'Le tuteur a bien ete modifier avec succes.');

    }
    //delete tuteur
    public function delete_tuteur($id){
        
        $tuteur=Tuteur::find($id);
        $tuteur->delete();
        
        return redirect('/tuteur')->with('status', 'Le tuteur a bien ete suprimer avec succes.');

    }
  
    
}
