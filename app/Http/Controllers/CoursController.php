<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Cours;
use \App\Module;
use \App\Universite;
use App\Http\Requests\CoursRequest;

class CoursController extends Controller
{
 public function index(){
        $cours = Cours::where('deleted',0)->paginate(8);//where('active',1)->get();
      return view('admin.espace-elearning.cours.index',compact('cours'));
   }
  public function all_cours_in_module1($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
        if($module === null){
      return view('admin.layouts.error_404');
    }else{
      $cours = Cours::where('deleted',0)->where('id_module',$id)->paginate(10);
      return view('admin.espace-elearning.cours.index',compact('cours','module'));
    }
}

   public function search_cours_index(Request $request){
      $name = $request->get('nom_cours');
      $cours = Cours::where('nom_cours','Like','%'.$name."%")->paginate(10);
      return view('admin.espace-elearning.cours.index',compact('cours'));
  }

   public function create($id){
    $module = Module::where('deleted',0)->where('id',$id)->first();
    return view('admin.espace-elearning.cours.add',compact('module'));
   }

   
   public function store(CoursRequest $request,Cours $cours){
      
      
        $cours->nom_cours = $request->input('nom_cours'); 
        $cours->annee = $request->input('annee');
        $cours->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $cours->cours = $request->file('fichier');
          $new_name = rand(). '.' .  $cours->cours->getClientOriginalExtension();
          $cours->cours->move('cours/',$new_name);
          $cours->cours = $new_name;
        }

        $cours->save();

        session()->flash('success','Le Cour est ajoutée avec succée');

 return redirect('/admin/cours/'.$cours->id_module.'/all-cours');
   }
    public function edit($id){
     $cours = Cours::find($id);
      if($cours === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.cours.edit',compact('cours'));
   }
 }
    public function update($id,Request $request){
        
        $cours = Cours::find($id);

      
        $cours->nom_cours = $request->input('nom_cours'); 
        $cours->annee = $request->input('annee');
        $cours->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $cours->cours = $request->file('fichier');
          $new_name = rand(). '.' .  $cours->cours->getClientOriginalExtension();
          $cours->cours->move('cours/',$new_name);
          $cours->cours = $new_name;
        }
       
        $cours->save();

        session()->flash('success','Le cours est Modifier avec succée');

 return redirect('/admin/cours');
   }
    public function destroy($id){

        $cours = Cours::find($id);
        $cours->deleted = 1;
        $cours->save();
        
         session()->flash('success','Le cours est supprimer avec succée');

 return redirect('/admin/cours');
  }

    public function show($id){

     $cours = Cours::find($id);
     if($cours === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.cours.show',compact('cours'));
   }
   }



    public function all_cours(){
    	$cours = Cours::where('deleted',0)->paginate(16);
    	return view('user.espace-elearning.cours.index',compact('cours'));
    }
  
    public function search_cours(Request $request)
    {
     if($request->get('nom_cours'))
     {
      $cours = $request->get('nom_cours');
      $cours = Cours::where('deleted',0)
        ->where('nom_cours', 'LIKE', "%{$cours}%")
        ->orwhere('annee',$cours)
        ->paginate(16);
      return view('user.espace-elearning.cours.index',compact('cours'));

     }
    }
    public function all_cours_in_module($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
       if($module === null){
      return view('layouts.error_404');
    }else{
    	$cours = Cours::where('deleted',0)->where('id_module',$id)->paginate(12);
    	return view('user.espace-elearning.cours.index',compact('cours','module'));
    }
  }

    public function add_cours($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
       if($module === null){
      return view('layouts.error_404');
    }else{
    	return view('user.espace-elearning.cours.add-cours',compact('module'));
    }
  }


   public function store_cours(Cours $cours,CoursRequest $request){
    
        $cours->nom_cours = $request->input('nom_cours'); 
        $cours->annee = $request->input('annee');
        $cours->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $cours->cours = $request->file('fichier');
          $new_name = rand(). '.' .  $cours->cours->getClientOriginalExtension();
          $cours->cours->move('cours/',$new_name);
          $cours->cours = $new_name;
        }

        $cours->save();

        session()->flash('success','Le Cours est ajoutée avec succée');
        return redirect('/module/'.$cours->id_module.'/all-cours');

 }

    public function search(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('nom_cours');
      $data = Cours::where('deleted',0)
        ->where('nom_cours', 'LIKE', "%{$query}%")
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a class="a" href="#">'.$row->nom_cours.'</a></li>';
       
      $output .= '</ul>';

      echo $output;
     }
    }
}

 public function find_cours(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Cours::where('nom_cours', 'LIKE', '%'.$term.'%')->distinct()->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->nom_cours, 'text' => $tag->nom_cours];
        }

        return \Response::json($formatted_tags);
    }

}
