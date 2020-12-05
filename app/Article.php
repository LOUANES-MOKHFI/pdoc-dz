<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $table = 'demande_article';
   protected $fillable = ['name', 'email', 'universite', 'grade', 'titre_article', 'auteur', 'annee_edition', 'titre_revue', 'lien', 'doi','sujet','langue','type_demande'];
}
