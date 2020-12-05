<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
   protected $table = 'module';
   protected $fillable = ['faculte', 'nom_module', 'domaine', 'specialite', 'niveaux', 'deleted', 'id_etablissement'];
}
