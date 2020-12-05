<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
use App\Http\Requests\ActualiteRequest;
use Illuminate\Support\Facades\Auth;
class ActualitesController extends Controller
{
    public function index(){
    	$actualite = Actualite::where('desactive',0)->get();
    	return view('admin.actualite.index',compact('actualite'));
    }

    public function create(){

   	return view('admin.actualite.add');
   }

   
   public function store(ActualiteRequest $request,Actualite $actualite){
        $actualite->titre = $request->input('titre');
        if($request->hasFile('image'))
       {
       $actualite->image = $request->file('image');
      $new_name = rand(). '.' . $actualite->image->getClientOriginalExtension();
        $actualite->image->move('images/',$new_name);
        $actualite->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }

        $actualite->lien = $request->input('lien');
        $actualite->description = $request->input('description');
        $actualite->nouveaute = $request->input('nouveaute');

        $actualite->save();
          
             
      session()->flash('success',"L'actualite' est ajouter avec succée");

 return redirect('/admin/actualites');
   }
    public function edit($id){
       $id = \Crypt::decrypt($id);
      $actualite = Actualite::find($id);
   	 return view('admin.actualite.edit',compact('actualite'));
   }
    public function update($id,Request $request){

        $actualite = Actualite::find($id);
        $actualite->titre = $request->input('titre');
        if($request->hasFile('image'))
       {
       $actualite->image = $request->file('image');
      $new_name = rand(). '.' . $actualite->image->getClientOriginalExtension();
        $actualite->image->move('images/',$new_name);
        $actualite->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
        $actualite->lien = $request->input('lien');
        $actualite->description = $request->input('description');
        $actualite->desactive = $request->input('desactive');
        $actualite->nouveaute = $request->input('nouveaute');

        $actualite->save();
          
    session()->flash('success',"L'actualite est modifier avec succée");
    return redirect('/admin/actualites');
   }

    public function destroy($id){

        $actualite = Actualite::find($id); // recupere les donnees de la bdd qui a une id=$id
        $actualite->desactive = 1;
          //$user = User::find($id);
          //$user->active = 0;
         $actualite->save();
        
    session()->flash('success',"L'actualite est supprimer avec succée");
    return redirect('/admin/actualite');
      //  return redirect('/admin/users')->withFlashMessage('');
    }

    public function show($id){
       $id = \Crypt::decrypt($id);
    	$actualite = Actualite::find($id);
    	return view('admin.actualite.show',compact('actualite'));
    }

    public function new_ressource(){
    	$actualite = Actualite::where('nouveaute',1)->where('desactive',0)->get();
    	return view('user.actualite.new_actualite',compact('actualite'));
    }

public function show_news($id){
        $actualite = Actualite::find($id);

  if($actualite === null){
      return view('layouts.error_404');
    }else{
    	return view('user.actualite.show_actualite',compact('actualite'));
    }}

}
