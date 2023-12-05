<?php

namespace App\Models;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected  $fillable = [
        'nom',
        'prenom',
        'classe',
        'photo',
    ];
    
   
    
    public function tuteur(){
        return $this->belongsTo(Tuteur::class);
    }

}
