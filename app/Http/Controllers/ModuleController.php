<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Module;
use \App\Universite;
use App\Http\Requests\ModulesRequest;

class ModuleController extends Controller
{
 public function index(){
        $modules = Module::where('deleted',0)->paginate(10);//where('active',1)->get();
      return view('admin.espace-elearning.index',compact('modules'));
   }


   public function search_modules_index(Request $request){
      $name = $request->get('nom_module');
      $modules = Module::where('nom_module','Like','%'.$name."%")
      ->orwhere('faculte','Like','%'.$name."%")
      ->orwhere('niveaux','Like','%'.$name."%")
      ->orwhere('specialite','Like','%'.$name."%")->paginate(10);
      return view('admin.espace-elearning.index',compact('modules'));
  }

   public function create(){

    return view('admin.espace-elearning.add');
   }

   
   public function store(ModulesRequest $request,Module $module){
      
        
        $module->faculte = $request->input('faculte'); 
        $module->nom_module = $request->input('nom_module');
        $module->domaine = $request->input('domaine');
        $module->specialite = $request->input('specialite');
        $module->niveaux = $request->input('niveaux');
       // $module->etablissement = $request->input('etablissement');  
        $module->id_etablissement = $request->input('id_etablissement');         
        $module->save();

        session()->flash('success','Le module est ajoutée avec succée');

 return redirect('/admin/modules');
   }
    public function edit($id){
     $module = Module::find($id);
      if($module === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.edit',compact('module'));
   }
 }
    public function update($id,Request $request){
        
        $module = Module::find($id);

        $module->faculte = $request->input('faculte'); 
        $module->nom_module = $request->input('nom_module');
        $module->domaine = $request->input('domaine');
        $module->specialite = $request->input('specialite');
        $module->niveaux = $request->input('niveaux');
       // $module->etablissement = $request->input('etablissement');  
        $module->id_etablissement = $request->input('id_etablissement');         
        $module->save();

        session()->flash('success','Le module est Modifier avec succée');

 return redirect('/admin/modules');
   }
    public function destroy($id){

        $module = Module::find($id);
        $module->deleted = 1;
        $module->save();
        
         session()->flash('success','Le module est supprimer avec succée');

 return redirect('/admin/modules');
  }

    public function show($id){

     $module = Module::find($id);
     if($module === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.show',compact('module'));
   }
   }



    public function all_modules(){
    	$module = Module::where('deleted',0)->paginate(16);
    	return view('user.espace-elearning.index',compact('module'));
    }

  public function all_modules_in_etablissement($id,$etablissement){
      $module = Module::where('deleted',0)->where('id_etablissement',$id)->paginate(12);
      return view('user.espace-elearning.index',compact('module','id','etablissement'));
    }
    public function show_module($id){
    	$module = Module::find($id);
       if($module === null){
      return view('layouts.error_404');
    }else{
    	return view('user.espace-elearning.show',compact('module'));
    }
  }
    
    public function search_module(Request $request)
    {
     if($request->get('nom_module'))
     {
      $module = $request->get('nom_module');
      $module = Module::where('deleted',0)
        ->where('nom_module', 'LIKE', "%{$module}%")
        ->orwhere('faculte', 'LIKE', "%{$module}%")
        ->orwhere('etablissement', 'LIKE', "%{$module}%")
        ->orwhere('specialite', 'LIKE', "%{$module}%")
        ->orwhere('domaine', 'LIKE', "%{$module}%")
        ->paginate(16);
      return view('user.espace-elearning.index',compact('module'));

     }
    }
    public function add_module($id,$etablissement){
    	return view('user.espace-elearning.add-module',compact('id','etablissement'));
    }


   public function store_module(Module $module,ModulesRequest $request){
    
        $module->faculte = $request->input('faculte'); 
        $module->nom_module = $request->input('nom_module');
        $module->domaine = $request->input('domaine');
        $module->specialite = $request->input('specialite');
        $module->niveaux = $request->input('niveaux');
        $module->etablissement = $request->input('etablissement');  
        $module->id_etablissement = $request->input('id_etablissement');         
        $module->save();

        session()->flash('success','Le module est ajoutée avec succée');
        return redirect('/espace-elearning');

 }

    public function search(Request $request)
    {

     if($request->get('query'))
     {
      if(!empty($request->get('id'))){
      $id = $request->get('id');
      $query = $request->get('query');
      $data = Module::select('nom_module')->distinct()->where('deleted',0)->where('id_etablissement',$id)
        ->where('nom_module', 'LIKE', "%{$query}%")
        ->get();
        }
      else{
           $query = $request->get('query');
      $data = Module::select('nom_module')->distinct()->where('deleted',0)
        ->where('nom_module', 'LIKE', "%{$query}%")
        ->get();
          }
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      
      foreach($data as $row)
      {
       $output .= '
       <li><a class="a" href="#">'.$row->nom_module.'</a></li>';
       
      $output .= '</ul>';

      echo $output;
     }
    }  
    
}

 public function get(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('etablissement');
      $data = Universite::where('nom_etablissement', 'LIKE', "%{$query}%")
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a class="a" href="#">'.$row->nom_etablissement.'</a></li>';
       
      $output .= '</ul>';

      echo $output;
     }
    }
}


 public function find_module(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Module::where('nom_module', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->nom_module, 'text' => $tag->nom_module];
        }

        return \Response::json($formatted_tags);
    }

}
