<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = [ 'titre', 'auteur', 'langue', 'adress_bib', 'isbn', 'sujet','prix','prix_f','image','deleted','livre_pdf','parution','pays_edition','nbr_page','format','isbn10','isbn13','mot_cle','resume','sommaire'] ;   
}
