<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ressource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RessourceRequest;

class RessourcePEController extends Controller
{
    public function index(){
      $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourcePE.index',compact('ressourcePE'));
    }

  public function search_ressourcepe_index(Request $request){
      $ressource = $request->get('ressource');

      $ressourcePE = Ressource::where('nom_ressource','Like','%'.$ressource."%")->where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourcePE.index',compact('ressourcePE'));
  }
  
  
    public function create(){

    return view('admin.ressource.ressourcePE.add');
   }

   
   public function store(RessourceRequest $request,Ressource $ressourcePE){

      $ressourcePE->nom_ressource = $request->input('nom_ressource');
      $ressourcePE->organisme_producteur = $request->input('organisme_producteur');
      $ressourcePE->url_ressource = $request->input('url_ressource');
      $ressourcePE->description = $request->input('description');
      $ressourcePE->type_ressource = $request->input('type_ressource');
      $ressourcePE->descipline = $request->input('descipline');
      $ressourcePE->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourcePE->langue = $request->input('langue');
      $ressourcePE->categorie_ressource = $request->input('categorie_ressource');
      $ressourcePE->domaine_ressource = $request->input('domaine_ressource');
      $ressourcePE->nationalite_ressource = $request->input('nationalite_ressource');
      $ressourcePE->type_acces = $request->input('type_acces');
      $ressourcePE->du = $request->input('du');
      $ressourcePE->au = $request->input('au');
        
        if($request->hasFile('logo'))
       {
       $ressourcePE->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourcePE->logo->getClientOriginalExtension();
        $ressourcePE->logo->move('images/',$new_name);
        $ressourcePE->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
       
        $ressourcePE->save();
      session()->flash('success',"La ressource est ajouter avec succée");

 return redirect('/admin/ressource/ressourcePE');
   }
    public function edit($id){
      $ressourcePE = Ressource::find($id);
       if($ressourcePE === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.ressource.ressourcePE.edit',compact('ressourcePE'));
   }
 }
    public function update($id,Request $request){

        $ressourcePE = Ressource::find($id);
      $ressourcePE->nom_ressource = $request->input('nom_ressource');
      $ressourcePE->organisme_producteur = $request->input('organisme_producteur');
      $ressourcePE->url_ressource = $request->input('url_ressource');
      $ressourcePE->description = $request->input('description');
      $ressourcePE->type_ressource = $request->input('type_ressource');
      $ressourcePE->descipline = $request->input('descipline');
      $ressourcePE->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourcePE->langue = $request->input('langue');
      $ressourcePE->categorie_ressource = $request->input('categorie_ressource');
      $ressourcePE->domaine_ressource = $request->input('domaine_ressource');
      $ressourcePE->type_acces = $request->input('type_acces');
      $ressourcePE->du = $request->input('du');
      $ressourcePE->au = $request->input('au');
         if($request->hasFile('logo'))
       {
       $ressourcePE->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourcePE->logo->getClientOriginalExtension();
        $ressourcePE->logo->move('images/',$new_name);
        $ressourcePE->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
       

        $ressourcePE->save();
          
    session()->flash('success',"La ressource est modifier avec succée");
    return redirect('/admin/ressource/ressourcePE');
   }

    public function destroy($id){

        $ressourcePE = Ressource::find($id); // recupere les donnees de la bdd qui a une id=$id
        $ressourcePE->deleted = 1;
          //$user = User::find($id);
          //$user->active = 0;
         $ressourcePE->save();
        
    session()->flash('success',"La ressource est supprimer avec succée");
    return redirect('/admin/ressource/ressourcePE');
      //  return redirect('/admin/users')->withFlashMessage('');
    }

    public function show($id){
      $ressourcePE = Ressource::find($id);
        if($ressourcePE === null){
      return view('admin.layouts.error_404');
    }else{
      return view('admin.ressource.ressourcePE.show',compact('ressourcePE'));
    }
  }

     public function getressourcepe(Request $request){
     
     $ressource = $request->ressource;

      $ressourcePE = Ressource::where('nom_ressource','Like','%'.$ressource."%")
     // ->orwhere('descipline','Like','%'.$ressource."%")
     // ->orwhere('organisme_producteur','Like','%'.$ressource."%")
      // ->orwhere('description','Like','%'.$ressource."%")
       ->where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);    
        return view('user.ressource_rpe',compact('ressourcePE'));
   }

    public function getressourceby_domaine($domaine){

     //$domaine = $request->domaine;
      if ($domaine == 'all_descipline') {
        $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->where('descipline',$domaine)->orderBy('nom_ressource')->paginate(15); 
       // return response::json($ressourcePE);
      //dd($ressourcePE);
    }
            return view('user.ressource_rpe',compact('ressourcePE'));
   }

    public function getressourceby_type($type){

     //$domaine = $request->domaine;
     // dd($type);
      if ($type == 'all_type') {
        $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_rpe',compact('ressourcePE'));
   }

public function getressource_lettre($lettre){
     //dd($lettre,$ressource);
      $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")
       ->where('nom_ressource','Like',$lettre."%")
     ->paginate(15)->appends('lettre',$lettre);
    
     // dd(count($ressourceDOC));

     return view('user.ressource_rpe',compact('ressourcePE'));
    
   }
}
