<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    protected $table = 'etablissement';
    protected $fillable = ['type_etablissement','nom_etablissement','lien'];
}
