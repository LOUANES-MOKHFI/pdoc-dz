<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'document';
  protected $fillable = ['name_enseignant', 'email_enseignant', 'type_etablissement', 'etablissement', 'domaine_document', 'faculte', 'grade_enseignant', 'auteur_doc', 'type_doc','annee_edition', 'titre_doc','fichier','lien', 'description'];
}
