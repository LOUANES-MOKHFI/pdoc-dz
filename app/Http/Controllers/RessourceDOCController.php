<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ressource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RessourceRequest;
class RessourceDOCController extends Controller
{
    public function index(){
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourceDOC.index',compact('ressourceDOC'));
    }

    public function search_ressourcedoc_index(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('nom_ressource','Like','%'.$ressource."%")->where('deleted',0)->where('categorie_ressource','ressource DOC')->orderBy('nom_ressource')->paginate(10);
      return view('admin.ressource.ressourceDOC.index',compact('ressourceDOC'));
  }

    public function create(){

    return view('admin.ressource.ressourceDOC.add');
   }

   
   public function store(RessourceRequest $request,Ressource $ressourceDOC){
      $ressourceDOC->nom_ressource = $request->input('nom_ressource');
      $ressourceDOC->organisme_producteur = $request->input('organisme_producteur');
      $ressourceDOC->url_ressource = $request->input('url_ressource');
      $ressourceDOC->description = $request->input('description');
      $ressourceDOC->type_ressource = $request->input('type_ressource');
      $ressourceDOC->descipline = $request->input('descipline');
      $ressourceDOC->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourceDOC->langue = $request->input('langue');
      $ressourceDOC->categorie_ressource = $request->input('categorie_ressource');
      $ressourceDOC->domaine_ressource = $request->input('domaine_ressource');
      $ressourceDOC->type_acces = $request->input('type_acces');

        
        if($request->hasFile('logo'))
       {
       $ressourceDOC->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourceDOC->logo->getClientOriginalExtension();
        $ressourceDOC->logo->move('images/',$new_name);
        $ressourceDOC->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
        $ressourceDOC->save();
      session()->flash('success',"La ressource est ajouter avec succée");

 return redirect('/admin/ressource/ressourceDOC');
   }
    public function edit($id){
      $ressourceDOC = Ressource::find($id);
        if($ressourceDOC === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.ressource.ressourceDOC.edit',compact('ressourceDOC'));
   }
 }
    public function update($id,Request $request){
 
        $ressourceDOC = Ressource::find($id);
      $ressourceDOC->nom_ressource = $request->input('nom_ressource');
      $ressourceDOC->organisme_producteur = $request->input('organisme_producteur');
      $ressourceDOC->url_ressource = $request->input('url_ressource');
      $ressourceDOC->description = $request->input('description');
      $ressourceDOC->type_ressource = $request->input('type_ressource');
      $ressourceDOC->descipline = $request->input('descipline');
      $ressourceDOC->couverture_chronologique = $request->input('couverture_chronologique');
      $ressourceDOC->langue = $request->input('langue');
      $ressourceDOC->categorie_ressource = $request->input('categorie_ressource');
      $ressourceDOC->domaine_ressource = $request->input('domaine_ressource');
      $ressourceDOC->type_acces = $request->input('type_acces');

        
        if($request->hasFile('logo'))
       {
       $ressourceDOC->logo = $request->file('logo');
      $new_name = rand(). '.' . $ressourceDOC->logo->getClientOriginalExtension();
        $ressourceDOC->logo->move('images/',$new_name);
        $ressourceDOC->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
        $ressourceDOC->save();
          
    session()->flash('success',"La ressource est modifier avec succée");
    return redirect('/admin/ressource/ressourceDOC');
   }

    public function destroy($id){

        $ressourceDOC = Ressource::find($id); // recupere les donnees de la bdd qui a une id=$id
        $ressourceDOC->deleted = 1;
          //$user = User::find($id);
          //$user->active = 0;
         $ressourceDOC->save();
        
    session()->flash('success',"La ressource est supprimer avec succée");
    return redirect('/admin/ressource/ressourceDOC');
      //  return redirect('/admin/users')->withFlashMessage('');
    }

    public function show($id){
      $ressourceDOC = Ressource::find($id);
       if($ressourceDOC === null){
      return view('admin.layouts.error_404');
    }else{
      return view('admin.ressource.ressourceDOC.show',compact('ressourceDOC'));
    }
  }


      public function getressourceplu(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','PLURIDISCIPLINAIRES')
      //->orwhere('descipline','Like','%'.$ressource."%")
      //->orwhere('organisme_producteur','Like','%'.$ressource."%")
      // ->orwhere('description','Like','%'.$ressource."%")
       ->where('nom_ressource','Like','%'.$ressource."%")
       ->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_doc.pruridisciplinaire',compact('ressourceDOC'));
  }

public function getressourcemultidisciplinaires(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
        ->where('domaine_ressource','MULTIDISCIPLINAIRES')
        //->orwhere('descipline','Like','%'.$ressource."%")
     // ->orwhere('organisme_producteur','Like','%'.$ressource."%")
      // ->orwhere('description','Like','%'.$ressource."%")
        ->where('nom_ressource','Like','%'.$ressource."%")
        ->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_doc.multidisciplinaire',compact('ressourceDOC'));
  }

     public function getressourcest(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
        ->where('domaine_ressource','SCIENCES ET TECHNIQUES')
        //->orwhere('descipline','Like','%'.$ressource."%")
     // ->orwhere('organisme_producteur','Like','%'.$ressource."%")
      // ->orwhere('description','Like','%'.$ressource."%")
        ->where('nom_ressource','Like','%'.$ressource."%")
        ->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_doc.science&technique',compact('ressourceDOC'));
  }

    public function getressourceslv(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
         ->where('nom_ressource','Like','%'.$ressource."%")
      //->orwhere('descipline','Like','%'.$ressource."%")
      //->orwhere('organisme_producteur','Like','%'.$ressource."%")
       //->orwhere('description','Like','%'.$ressource."%")
       ->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_doc.science_vie&terre',compact('ressourceDOC'));
  }

   public function getressourceshs(Request $request){
      $ressource = $request->get('ressource');

      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
          ->where('nom_ressource','Like','%'.$ressource."%")
      //->orwhere('descipline','Like','%'.$ressource."%")
     // ->orwhere('organisme_producteur','Like','%'.$ressource."%")
       //->orwhere('description','Like','%'.$ressource."%")
        ->orderBy('nom_ressource')->paginate(15)->appends('ressource',$request->ressource);
      return view('user.ressource_doc.science_humaine&social',compact('ressourceDOC'));
  }

/*Pluridisciplinaire*/
      public function getressourcepluby_domaine($domaine){

      if ($domaine == 'all_descipline') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')
        ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('descipline',$domaine)->where('domaine_ressource','PLURIDISCIPLINAIRES')
       ->orderBy('nom_ressource')->paginate(15); 
       // return response::json($ressourcePE);
      //dd($ressourcePE);
    }
            return view('user.ressource_doc.pruridisciplinaire',compact('ressourceDOC'));
   }

 public function getressourcemultiby_type($type){

      if ($type == 'all_type') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','MULTIDISCIPLINAIRES')
         ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','MULTIDISCIPLINAIRES')
       ->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_doc.multidisciplinaire',compact('ressourceDOC'));
   }
    public function getressourcepluby_type($type){

      if ($type == 'all_type') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')
         ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','PLURIDISCIPLINAIRES')
       ->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_doc.pruridisciplinaire',compact('ressourceDOC'));
   }
/*SCience et technique*/

    public function getressourcestby_domaine($domaine){

      if ($domaine == 'all_descipline') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')
        ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('descipline',$domaine)->where('domaine_ressource','SCIENCES ET TECHNIQUES')
       ->orderBy('nom_ressource')->paginate(15); 
       // return response::json($ressourcePE);
      //dd($ressourcePE);
    }
            return view('user.ressource_doc.science&technique',compact('ressourceDOC'));
   }

    public function getressourcestby_type($type){

      if ($type == 'all_type') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')
         ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES ET TECHNIQUES')
       ->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_doc.science&technique',compact('ressourceDOC'));
   }
   /*Science humaine et socialne*/

   public function getressourceshsby_domaine($domaine){

      if ($domaine == 'all_descipline') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
        ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('descipline',$domaine)->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
      ->orderBy('nom_ressource')->paginate(15); 
       // return response::json($ressourcePE);
      //dd($ressourcePE);
    }
            return view('user.ressource_doc.science_humaine&social',compact('ressourceDOC'));
   }

    public function getressourceshsby_type($type){

      if ($type == 'all_type') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
        ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
      ->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_doc.science_humaine&social',compact('ressourceDOC'));
   }

      /*Science de la vie et de la terre*/

   public function getressourceslvby_domaine($domaine){

      if ($domaine == 'all_descipline') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
       ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('descipline',$domaine)->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
       ->orderBy('nom_ressource')->paginate(15); 
       // return response::json($ressourcePE);
      //dd($ressourcePE);
    }
            return view('user.ressource_doc.science_vie&terre',compact('ressourceDOC'));
   }

    public function getressourceslvby_type($type){

      if ($type == 'all_type') {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
         ->orderBy('nom_ressource')->paginate(15); 
      }else{
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource',"ressource DOC")->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
       ->where('type_ressource',$type)->orderBy('nom_ressource')->paginate(15); 
    }
            return view('user.ressource_doc.science_vie&terre',compact('ressourceDOC'));
   }

   public function getressource_lettre($lettre,$ressource){
     //dd($lettre,$ressource);
      $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
      
      ->where('domaine_ressource',$ressource)
      //->orWhere('domaine_ressource','=','MULTIDISCIPLINAIRES')
       ->where('nom_ressource','Like',$lettre."%")
    ->paginate(15)->appends('lettre',$lettre);
    
      //dd(count($ressourceDOC));
     if($ressource == 'PLURIDISCIPLINAIRES'){
     return view('user.ressource_doc.pruridisciplinaire',compact('ressourceDOC'));
     }
     elseif($ressource == 'SCIENCES DE LA VIE ET DE LA TERRE'){
     return view('user.ressource_doc.science_vie&terre',compact('ressourceDOC'));
     }
     elseif($ressource == 'SCIENCES HUMAINES ET SOCIALES'){
    return view('user.ressource_doc.science_humaine&social',compact('ressourceDOC'));
     }
     elseif($ressource == 'SCIENCES ET TECHNIQUES'){
     return view('user.ressource_doc.science&technique',compact('ressourceDOC'));
     }
      elseif($ressource == 'MULTIDISCIPLINAIRES'){
     return view('user.ressource_doc.multidisciplinaire',compact('ressourceDOC'));
     }
   } 
}
