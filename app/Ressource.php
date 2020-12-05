<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $table = 'ressource';
    protected $fillable = ['nom_ressource', 'organisme_producteur', 'url_ressource', 'description', 'type_ressource', 'descipline', 'couverture_chronologique', 'langue', 'categorie_ressource', 'domaine_ressource', 'nationalite_ressource', 'logo', 'type_acces'];
}
