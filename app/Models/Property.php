<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['titre','description','surface','chambre', 'nbre_de_piece',
    'etage', 'prix', 'ville','adresse', 'code_postal', 'vendu']
     
         ;
         public function options()
         {
            return $this->belongsToMany(Option::class);
         }

         public function getSlug(){
            return Str::slug($this->titre);
         }
}
