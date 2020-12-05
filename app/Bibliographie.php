<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliographie extends Model
{
    protected $table = 'bibliographie';
    protected $fillable = ['module', 'etablissement', 'faculte', 'lien'];
}
