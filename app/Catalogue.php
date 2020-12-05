<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $table = 'catalogue';
    protected $fillable = ['etablissement','structure','url','thematique'];
}
