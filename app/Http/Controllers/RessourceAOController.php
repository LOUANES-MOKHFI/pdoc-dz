<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ressource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RessourceRequest;
class RessourceAOController extends Controller
{
     public function index(){
      $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourceAO.index',compact('ressourceAO'));
    }
  public function search_ressourceao_index(Request $request){
      $ressource = $request->get('ressource');

      $ressourceAO = Ressource::where('nom_ressource','Like','%'.$ressource."%")->where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
       ->orwhere('descipline','Like','%'.$ressource."%")
      ->orwhere('organisme_producteur','Like','%'.$ressource."%")->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourceAO.index',compact('ressourceAO'));
  }

    public function create(){

    return view('admin.ressource.ressourceAO.add');
   }

   
   public function store(RessourceRequest $request,Ressource $ressourceAO){

      $ressourceAO->nom_ressource = $request->input('nom_ressource');
      $ressourceAO->organisme_producteur = $request->input('organisme_producteur');
      $ressourceAO->url_ressource = $request->input('url_ressource');
      $ressourceAO->description = $request->input('description');
      $ressourceAO->type_ressource = $request->input('type_ressource');
      $ressourceAO->descipline = $request->input('descipline');
      $ressourceAO->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourceAO->langue = $request->input('langue');
      $ressourceAO->categorie_ressource = $request->input('categorie_ressource');
      $ressourceAO->nationalite_ressource = $request->input('nationalite_ressource');
      $ressourceAO->type_acces = $request->input('type_acces');
      $ressourceAO->pays = $request->input('pays');

        if($request->hasFile('logo'))
       {
       $ressourceAO->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourceAO->logo->getClientOriginalExtension();
        $ressourceAO->logo->move('images/',$new_name);
        $ressourceAO->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }

       
        $ressourceAO->save();
      session()->flash('success',"La ressource est ajouter avec succée");

 return redirect('/admin/ressource/ressourceAO');
   }
    public function edit($id){
      $ressourceAO = Ressource::find($id);
       if($ressourceAO === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.ressource.ressourceAO.edit',compact('ressourceAO'));
   }
 }
    public function update($id,Request $request){
 
        $ressourceAO = Ressource::find($id);
     $ressourceAO->nom_ressource = $request->input('nom_ressource');
      $ressourceAO->organisme_producteur = $request->input('organisme_producteur');
      $ressourceAO->url_ressource = $request->input('url_ressource');
      $ressourceAO->description = $request->input('description');
      $ressourceAO->type_ressource = $request->input('type_ressource');
      $ressourceAO->descipline = $request->input('descipline');
      $ressourceAO->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourceAO->langue = $request->input('langue');
      $ressourceAO->categorie_ressource = $request->input('categorie_ressource');
      $ressourceAO->nationalite_ressource = $request->input('nationalite_ressource');
      $ressourceAO->type_acces = $request->input('type_acces');

             $ressourceAO->pays = $request->input('pays');

        if($request->hasFile('logo'))
       {
       $ressourceAO->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourceAO->logo->getClientOriginalExtension();
        $ressourceAO->logo->move('images/',$new_name);
        $ressourceAO->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
       
        $ressourceAO->save();
          
    session()->flash('success',"La ressource est modifier avec succée");
    return redirect('/admin/ressource/ressourceAO');
   }

    public function destroy($id){

        $ressourceAO = Ressource::find($id); // recupere les donnees de la bdd qui a une id=$id
        $ressourceAO->deleted = 1;
          //$user = User::find($id);
          //$user->active = 0;
         $ressourceAO->save();
        
    session()->flash('success',"La ressource est supprimer avec succée");
    return redirect('/admin/ressource/ressourceAO');
      //  return redirect('/admin/users')->withFlashMessage('');
    }

    public function show($id){
      $ressourceAO = Ressource::find($id);
      if($ressourceAO === null){
      return view('admin.layouts.error_404');
    }else{
      return view('admin.ressource.ressourceAO.show',compact('ressourceAO'));
    }
  }

  public function getressourceal(Request $request){
      $ressource = $request->get('ressource');

        $ressourceAO = Ressource::where('nom_ressource','Like','%'.$ressource."%")
      
        ->where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
        ->where('nationalite_ressource','Algériennes')->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_ao.algerienne',compact('ressourceAO'));
  }

public function getressourceetr(Request $request){
      $ressource = $request->get('ressource');

         $ressourceAO = Ressource::where('nom_ressource','Like','%'.$ressource."%")
         
       ->where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_ao.etrangere',compact('ressourceAO'));
  }


 public function getressourcealby_domaine($domaine){
     //$domaine = $request->domaine;
      if ($domaine == 'all_descipline') {
        $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Algériennes')->orderBy('nom_ressource')->paginate(15); 
      }else{
       $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Algériennes')->where('descipline',$domaine)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_ao.algerienne',compact('ressourceAO'));
   }

    public function getressourcealby_type($type){

     //$domaine = $request->domaine;
     // dd($type);
      if ($type == 'all_type') {
        $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Algériennes')->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Algériennes')->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_ao.algerienne',compact('ressourceAO'));
   }



 public function getressourceetrby_domaine($domaine){
     //$domaine = $request->domaine;
      if ($domaine == 'all_descipline') {
        $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->orderBy('nom_ressource')->paginate(15); 
      }else{
       $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->where('descipline',$domaine)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_ao.etrangere',compact('ressourceAO'));
   }

     public function getressourceetrby_type($type){

     //$domaine = $request->domaine;
     // dd($type);
      if ($type == 'all_type') {
        $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_ao.etrangere',compact('ressourceAO'));
   }
   
   public function getressource_lettre($lettre,$ressource){
     //dd($lettre,$ressource);
      $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
       ->where('nom_ressource','Like',$lettre."%")
      ->where('nationalite_ressource',$ressource)
     ->paginate(15)->appends('lettre',$lettre);
    
     // dd(count($ressourceDOC));
     if($ressource == 'Algériennes'){
     return view('user.ressource_ao.algerienne',compact('ressourceAO'));
     }
     elseif($ressource == 'Etrangères'){
     return view('user.ressource_ao.etrangere',compact('ressourceAO'));
     }
     
   } 
}

