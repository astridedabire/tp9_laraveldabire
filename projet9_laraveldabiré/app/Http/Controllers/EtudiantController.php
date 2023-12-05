<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Image;

class EtudiantController extends Controller
{
    //
    public function liste_etudiant(){
        
        $etudiants = Etudiant::all();
        
        return view('etudiant.liste',
                    compact(
                        'etudiants'
                    ));
    }
    
    public function ajouter_etudiant(){
        
        $tuteurs= Tuteur::all();
        $images= Image::all();
        return view('etudiant.ajouter',compact(
            'tuteurs','images'));
    }
    
    public function ajouter_etudiant_traitement(Request $request){
        //bloc pour mettre un message si un champ est vide
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'image' => 'required',
            'tuteur' => 'required',
        ]);
       
        
       
        $etudiant= new Etudiant();

                
        $etudiant->nom= $request->nom;
        $etudiant->prenom= $request->prenom;
        $etudiant->classe= $request->classe;
        // $etudiant->photo = $request->photo;
        $etudiant->tuteur_id = $request->tuteur;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $etudiant->photo = $imageName;
            
        }
        
        
        
        $etudiant->save();
        
        return redirect('/ajouter')->with('status', 'L\'eleve a bien ete enregister avec succes.');

        
    }
    
    //update etudiant
    public function update_etudiant($id){
        
        $etudiants= Etudiant::find($id);
        $tuteurs= Tuteur::all();
        
        
        return view('etudiant.update',
                    compact(
                        'etudiants',
                        'tuteurs'
                        
                    ));
        
        
    }
    
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'tuteur' => 'required'
        ]);
        $etudiant=Etudiant::find($request->id);
        $etudiant->nom= $request->nom;
        $etudiant->prenom= $request->prenom;
        $etudiant->classe= $request->classe;
        $etudiant->tuteur_id= $request->tuteur;
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'eleve a bien ete modifier avec succes.');

    }
    //delete function
    public function delete_etudiant($id){
        
        $etudiant=Etudiant::find($id);
        $etudiant->delete();
        
        return redirect('/etudiant')->with('status', 'L\'eleve a bien ete suprimer avec succes.');

    }
}
