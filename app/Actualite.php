<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $table = 'actualite';
    protected $fillable = ['titre','image','description','lien'];
}
