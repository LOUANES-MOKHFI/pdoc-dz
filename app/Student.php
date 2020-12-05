<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = 'etudiants';
   protected $fillable = [ 'name', 'email', 'password','universite', 'faculte', 'domaine', 'specialite', 'matricule'];
}
