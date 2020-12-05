<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
class ArticleController extends Controller
{

	public function index()
	{
		$demande = Article::all();
		return view('admin.demande.index',compact('demande'));
	}

	 public function destroy($id){
   
        $demande = Article::find($id); // recupere les donnees de la bdd qui a une id=$id
        $demande->deleted = 1;
        $demande->save();
        
       session()->flash('success','la supression est faite avec succée');

 return redirect('/demande_article1');
    }

public function supprimer($id){
   
        $demande = Article::find($id); // recupere les donnees de la bdd qui a une id=$id
        $demande->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/demande_article1/demande/corbeille');
    }
  public function show($id,Article $demande){

      $demande = $demande->find($id);
      
      if($demande === null){
      return view('admin.layouts.error_404');
    }else{
         $demande->view = 1;
        $demande->save();
        return view('admin.demande.show',compact('demande'));
    }
    }

    public function demande_lu(){
   
        return view('admin.demande.demande_lu');
  }
  public function demande_non_lu(){
        return view('admin.demande.demande_non_lu');
  }
  public function corbeille(){
        return view('admin.demande.corbeille');
  }
    public function demande_article(Article $article,ArticleRequest $request){
       
       $article->create([
     	  'name'       => $request->name,       
     	  'email'      => $request->email,
     	  'universite' => $request->universite,
     	  'grade'      => $request->grade,
     	  'titre_article'=> $request->titre_article,
        'auteur'       => $request->auteur,
        'annee_edition'=> $request->annee_edition,
        'titre_revue'  => $request->titre_revue,
        'lien'         => $request->lien,
        'doi'          => $request->doi,
        'type_demande' => $request->type_demande,

        ]);

       return redirect('/demande_article')->with('success','Votre demande a bien étè envoyer');
    }

    public function demande_livre(Article $article,ArticleRequest $request){
       
        $article->create([
        'name'       => $request->name,       
        'email'      => $request->email,
        'universite' => $request->universite,
        'grade'      => $request->grade,
        'titre_article' => $request->titre_article,
        'auteur'        => $request->auteur,
        'doi'           => $request->doi,
        'annee_edition' => $request->annee_edition,
        'editeur'       => $request->editeur,
        'type_demande'  => $request->type_demande,

        ]);

       return redirect('/demande_livre')->with('success','Votre demande a bien étè envoyer');
    }
}
