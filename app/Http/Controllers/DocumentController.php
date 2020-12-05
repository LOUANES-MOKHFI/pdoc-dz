<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
  public function index(){
        $document = Document::where('deleted',0)->orderby('id','desc')->paginate(10);//where('active',1)->get();
      return view('admin.document.index',compact('document'));
   }


   public function search_document_index(Request $request){
      $document1 = $request->get('document');
      $document = Document::where('deleted',0)->where('titre_doc','Like','%'.$document1."%")->paginate(10);
      return view('admin.document.index',compact('document'));
  }


 public function add_document(Document $document,DocumentRequest $request){
    
    $id_user = Auth::user()->id;
        $document->name_enseignant = $request->input('name_enseignant'); 
        $document->email_enseignant = $request->input('email_enseignant');
        $document->etablissement = $request->input('etablissement');
        $document->domaine_document = $request->input('domaine_document');
        $document->faculte = $request->input('faculte');
        $document->grade_enseignant = $request->input('grade_enseignant');  
        $document->auteur_doc = $request->input('auteur_doc');
 		    $document->type_doc = $request->input('type_doc');  
        $document->titre_doc = $request->input('titre_doc');
        $document->url = $request->input('url');

        $document->annee_edition = $request->input('annee_edition');
        if($request->input('lien') != null){
          $document->lien = $request->input('lien');
        }
        if($request->input('description') != null){
          $resume = \Crypt::encrypt($request->input('description'));
          $document->description = $resume;
        }
         if($request->hasFile('fichier'))
        {
	        $document->fichier = $request->file('fichier');
	        $new_name = rand(). '.' .  $document->fichier->getClientOriginalExtension();
	        $document->fichier->move('document/',$new_name);
	        $document->fichier = $new_name;
        }
         $document->id_user = $id_user;
        $document->save();

        session()->flash('success','Le fichier est ajoutée avec succée,attendez la confirmation d\'administrateur');
        return redirect('/add-document');

 }

  public function search_document(Request $request){

    $domaine_document = $request->get('domaine_document');
    $titre_document = $request->get('titre_document');
    $auteur = $request->get('auteur');
    $type_doc = $request->get('type_doc');
    $annee_edition = $request->get('annee_edition');

   /*4*/

if($auteur != null && $titre_document != null && $domaine_document != null && $annee_edition != null && $type_doc != null)
    {
         $document = Document::where('deleted',0)->where('domaine_document',$domaine_document)
          ->where('auteur_doc',$auteur)
           ->where('titre_doc',$titre_document)
         ->where('type_doc',$type_doc)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','titre_document','auteur'));
    }
    if($auteur != null && $titre_document != null && $domaine_document != null && $annee_edition != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('titre_doc',$titre_document)
         ->where('domaine_document',$domaine_document)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }
      if($auteur != null && $titre_document != null && $domaine_document != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('titre_doc',$titre_document)
         ->where('domaine_document',$domaine_document)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }
    if($auteur != null && $titre_document != null && $annee_edition != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('titre_doc',$titre_document)
         ->where('annee_edition',$annee_edition)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }
    if($auteur != null && $domaine_document != null && $annee_edition != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('domaine_document',$domaine_document)
         ->where('annee_edition',$annee_edition)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }
     if($titre_document != null && $domaine_document != null && $annee_edition != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
         ->where('domaine_document',$domaine_document)
         ->where('annee_edition',$annee_edition)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }

    /*3*/
     if($auteur != null && $titre_document != null && $domaine_document != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('titre_doc',$titre_document)
         ->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','type_doc'));
    }
     elseif($auteur != null && $titre_document != null && $annee_edition !=null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
        ->where('titre_doc',$titre_document)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','annee_edition'));
    }
     elseif($auteur  != null && $titre_document != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
        ->where('titre_doc',$titre_document)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','auteur','type_doc'));
    }
      elseif($titre_document != null && $domaine_document != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
        ->where('domaine_document',$domaine_document)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','auteur'));
    }
     elseif($domaine_document != null && $titre_document != null && $annee_edition  != null ){
        $document = Document::where('deleted',0)->where('domaine_document',$domaine_document)
         ->where('titre_doc',$titre_document)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','auteur'));
    }
      elseif($domaine_document!= null && $type_doc!=null && $annee_edition != null ){
        $document = Document::where('deleted',0)->where('domaine_document',$domaine_document)
         ->where('type_doc',$type_doc)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','auteur'));
    }
  elseif($titre_document!=null &&  $type_doc!= null && $annee_edition != null ){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
         ->where('type_doc',$type_doc)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','auteur'));
    }
     elseif($auteur!=null && $type_doc!=null && $annee_edition != null ){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('type_doc',$type_doc)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','auteur'));
    }
     elseif($auteur!= null && $domaine_document!= null && $annee_edition != null ){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('domaine_document',$domaine_document)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition','auteur'));
    }
 

/*2*/
elseif($type_doc != null && $domaine_document != null){
        $document = Document::where('deleted',0)->where('type_doc',$type_doc)
         ->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','type_doc'));
    }
       if($annee_edition != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('annee_edition',$annee_edition)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition'));
    } 
    elseif($annee_edition != null && $domaine_document != null){
        $document = Document::where('deleted',0)->where('annee_edition',$annee_edition)
         ->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','type_doc'));
    }
     elseif($annee_edition != null && $titre_document != null){
        $document = Document::where('deleted',0)->where('annee_edition',$annee_edition)
         ->where('titre_doc',$titre_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','titre_document','annee_edition'));
    }

       elseif($titre_document != null && $domaine_document != null){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
         ->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','annee_edition'));
    }
    elseif($titre_document != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','type_doc','annee_edition'));
    }


     elseif($auteur != null && $type_doc != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','auteur','type_doc'));
    }
      elseif($auteur != null && $annee_edition != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','auteur','type_doc'));
    }
      elseif($auteur != null && $domaine_document != null){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document','auteur'));
    }
     elseif($auteur != null && $titre_document != null  ){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('titre_doc',$titre_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','titre_document','auteur'));
    }
 /*1*/
        elseif($type_doc != null ){
        $document = Document::where('deleted',0)->where('type_doc',$type_doc)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','type_doc'));
    }
elseif($annee_edition != null ){
        $document = Document::where('deleted',0)->where('annee_edition',$annee_edition)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','annee_edition'));
    }
    elseif($domaine_document != null ){
        $document = Document::where('deleted',0)->where('domaine_document',$domaine_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','domaine_document'));
    }
elseif($titre_document != null){
        $document = Document::where('deleted',0)->where('titre_doc',$titre_document)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document','titre_document'));
    }
elseif($auteur != null ){
        $document = Document::where('deleted',0)->where('auteur_doc',$auteur)
         ->where('confirmation',1)->get();
         return view('user.partager_document.search_document',compact('document'));
    }


  }




  

     
 public function show($id){
  $document = Document::find($id);
      if($document === null){
      return view('layouts.error_404');
    }else{
     $document = Document::find($id);
     return view('admin.document.show',compact('document'));
   }
 }

    public function rejeter($id){

        $document = Document::find($id); // recupere les donnees de la bdd qui a une id=$id
          if($document === null){
      return view('layouts.error_404');
    }else{
          $document->confirmation = 0;
          $document->save();
        
         session()->flash('success','Le docuemnt est rejeter');

 return redirect('/admin/document');
    }
  }

    public function confirmer($id){

        $document = Document::where('deleted',0)->where('id',$id)->first(); // recupere les donnees de la bdd qui a une id=$id
         if($document === null){
      return view('layouts.error_404');
    }else{
          $document->confirmation = 1;
          $document->save();
           session()->flash('success','Le document est Confirmer');

 return redirect('/admin/document');
    }
  }

   public function show_document($id){
  $document = Document::find($id);
      if($document === null){
      return view('layouts.error_404');
    }else{
     $document = Document::find($id);
     return view('user.partager_document.resume',compact('document'));
   }
 }

    public function find_titre(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Document::select('titre_doc')->distinct()->where('deleted',0)->where('titre_doc', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->titre_doc, 'text' => $tag->titre_doc];
        }

        return \Response::json($formatted_tags);
    }
    
 public function find_auteur(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Document::select('auteur_doc')->distinct()->where('deleted',0)->where('auteur_doc', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->auteur_doc, 'text' => $tag->auteur_doc];
        }

        return \Response::json($formatted_tags);
    }

 public function find_domaine(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Document::select('domaine_document')->distinct()->where('deleted',0)->where('domaine_document', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->domaine_document, 'text' => $tag->domaine_document];
        }

        return \Response::json($formatted_tags);
    }


         public function getdocument_user(){
       $id = Auth::user()->id;
    $documents = Document::where('id_user', $id)->where('deleted',0)->orderBy('titre_doc')->paginate(10);
      return view('user.dashboard.document',compact('documents'));
  }

  public function editdocument_user($id){
  $id_user = Auth::user()->id;
      $document = Document::where('id',$id)->where('id_user', $id_user)->where('deleted',0)->first();

       if($document === null){
      return view('admin.layouts.error_404');
    }else{
     return view('user.dashboard.edit_document',compact('document'));
   }
 }

    public function updatedocuments_user($id,Request $request){
              $id_user = Auth::user()->id;
        $document = Document::find($id);
         $id_user = Auth::user()->id;
        $document->name_enseignant = $request->input('name_enseignant'); 
        $document->email_enseignant = $request->input('email_enseignant');
        $document->etablissement = $request->input('etablissement');
        $document->domaine_document = $request->input('domaine_document');
        $document->faculte = $request->input('faculte');
        $document->grade_enseignant = $request->input('grade_enseignant');  
        $document->auteur_doc = $request->input('auteur_doc');
            $document->type_doc = $request->input('type_doc');  
        $document->titre_doc = $request->input('titre_doc');
        $document->url = $request->input('url');

        $document->annee_edition = $request->input('annee_edition');
        if($request->input('lien') != null){
          $document->lien = $request->input('lien');
        }
        if($request->input('description') != null){
          $resume = \Crypt::encrypt($request->input('description'));
          $document->description = $resume;
        }
         if($request->hasFile('fichier'))
        {
            $document->fichier = $request->file('fichier');
            $new_name = rand(). '.' .  $document->fichier->getClientOriginalExtension();
            $document->fichier->move('document/',$new_name);
            $document->fichier = $new_name;
        }
         $document->id_user = $id_user;
        $document->save();

        session()->flash('success','Le Document est modifier avec succée');
        return redirect('/user/documents');

         session()->flash('success',"Le Document est modifiée avec succée");

 return redirect('/user/documents');
   }
    public function destroydocument_user($id){
          $document = Document::find($id);
          $document->deleted = 1;
          $document->save();
        
         session()->flash('success',"Le Document est supprimée avec succée");

 return redirect('/user/documents');
  }

}
