<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tds extends Model
{
     protected $table = 'td';
     protected $fillable = ['nom_td', 'td', 'id_module', 'deleted'];
}
