<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examens extends Model
{
     protected $table = 'examens';
     protected $fillable = ['nom_examens','examens', 'id_module', 'deleted'];
}
