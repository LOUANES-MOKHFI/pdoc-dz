<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'reference';
    protected $fillable = ['titre', 'auteur', 'editeur', 'annee_edition', 'deleted', 'id_bibliographie'];
}
