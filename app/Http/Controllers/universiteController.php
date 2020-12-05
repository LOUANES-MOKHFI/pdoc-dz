<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universite;
use App\Http\Requests\UniversiteRequest;
class universiteController extends Controller
{
     public function index(){
        $universite = Universite::paginate(10);//where('active',1)->get();
    	return view('admin.universite.index',compact('universite'));
   }


   public function search_universite_index(Request $request){
      $name = $request->get('name');
      $universite = Universite::where('nom_etablissement','Like','%'.$name."%")->paginate(10);
      return view('admin.universite.index',compact('universite'));
  }

   public function create(){

   	return view('admin.universite.add');
   }

   
   public function store(UniversiteRequest $request,Universite $universite){
      $universite->create([
            'type_etablissement'  => $request->type_etablissement,
            'nom_etablissement' => $request->nom_etablissement,
            'lien' => $request->lien,

        ]);
      session()->flash('success',"L'universite' est ajouter avec succée");

 return redirect('/universite');
   }
    public function edit($id){
     $universite = Universite::find($id);
   	 return view('admin.universite.edit',compact('universite'));
   }
    public function update($id,Request $request){

        $universite = Universite::find($id);
        $universite->type_etablissement = $request->input('type_etablissement');
        $universite->nom_etablissement = $request->input('nom_etablissement');
        $universite->lien = $request->input('lien');
        

        $universite->save();
          
         session()->flash('success',"L'universite est modifier avec succée");

 return redirect('/universite');
   }
    public function destroy($id){
        $universite = Universite::find($id); // recupere les donnees de la bdd qui a une id=$id
        $universite->delete();
         session()->flash('success',"L'universite est supprimer avec succée");

 return redirect('/universite');
  }

    public function show($id){
   	 $universite = Universite::find($id);
     return view('admin.universite.show',compact('universite'));
   }

   public function All_etablissement(){
    $etablissement = universite::paginate(15);
    return view('user.espace-elearning.etablissement',compact('etablissement'));
   }

    public function get_etablissement(Request $request){
      $etablissement = $request->get('etablissement');
      $etablissement = Universite::where('nom_etablissement','Like','%'.$etablissement."%")->paginate(15);
    return view('user.espace-elearning.etablissement',compact('etablissement'));
  }

  public function find_etablissement(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = universite::where('nom_etablissement', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->nom_etablissement, 'text' => $tag->nom_etablissement];
        }

        return \Response::json($formatted_tags);
    }

}
