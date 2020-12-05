<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bibliographie;
use \App\Reference;
use App\Http\Requests\ReferenceRequest;

class ReferenceController extends Controller
{
    
     public function add_reference_admin($id){
        $module = Bibliographie::where('deleted',0)->where('id',$id)->first();
        return view('admin.bibliographie_modules.reference_bibliographique.add',compact('module')); 
    }

      public function add_reference($id){
      	$module = Bibliographie::where('deleted',0)->where('id',$id)->first();
    	return view('user.bibliographie_modules.reference_bibliographique.add',compact('module')); 
    }
  
 public function show_module($id){
        $reference = Reference::where('deleted',0)->where('id_bibliographie',$id)->first();
        return view('user.bibliographie_modules.reference_bibliographique.show',compact('reference')); 
    }
        
     public function store_reference_admin(Reference $reference,ReferenceRequest $request){
        
        $id = $request->input('id');
        $reference->titre = $request->input('titre'); 
        $reference->auteur = $request->input('auteur');
        $reference->editeur = $request->input('editeur');
        $reference->annee_edition = $request->input('annee_edition');
        $reference->id_bibliographie = $id;

        $reference->save();
        $module = Bibliographie::where('deleted',0)->where('id',$id)->first();

        session()->flash('add','Le Module '.$module->module.' est ajoutée avec succée');
        return redirect('/bibliographie-modules');

        }
     public function store_reference(Reference $reference,ReferenceRequest $request){
        
        $id = $request->input('id');
        $reference->titre = $request->input('titre'); 
        $reference->auteur = $request->input('auteur');
        $reference->editeur = $request->input('editeur');
        $reference->annee_edition = $request->input('annee_edition');
        $reference->id_bibliographie = $id;

        $reference->save();
        $module = Bibliographie::where('deleted',0)->where('id',$id)->first();

        session()->flash('add','Le Module '.$module->module.' est ajoutée avec succée');
        return redirect('/bibliographie-des-modules');

        }
        
}
