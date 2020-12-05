<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
     protected $table = 'cours';
     protected $fillable = ['nom_cours', 'cours','annee','id_module', 'deleted'];
}
