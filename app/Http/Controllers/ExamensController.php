<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Examens;
use \App\Module;
use App\Http\Requests\EXamensRequest;
class ExamensController extends Controller
{

  
 public function index(){
        $examens = Examens::where('deleted',0)->paginate(8);//where('active',1)->get();
      return view('admin.espace-elearning.examens.index',compact('examens'));
   }
  public function all_examens_in_module1($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
      if($module === null){
      return view('admin.layouts.error_404');
    }else{
      $examens = Examens::where('deleted',0)->where('id_module',$id)->paginate(10);
      return view('admin.espace-elearning.examens.index',compact('examens','module'));
    }
  }


   public function search_examens_index(Request $request){
      $name = $request->get('nom_examen');
      $examens = Examens::where('nom_examens','Like','%'.$name."%")->paginate(10);
      return view('admin.espace-elearning.examens.index',compact('examens'));
  }

   public function create($id){
    $module = Module::where('deleted',0)->where('id',$id)->first();
    if($module === null){
      return view('admin.layouts.error_404');
    }else{
    return view('admin.espace-elearning.examens.add',compact('module'));
   }
   }
   
   public function store(EXamensRequest $request,Examens $examens){
      
      
          $examens->nom_examens = $request->input('nom_examen'); 
        $examens->annee = $request->input('annee');
        $examens->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $examens->examens = $request->file('fichier');
          $new_name = rand(). '.' .  $examens->examens->getClientOriginalExtension();
          $examens->examens->move('examens/',$new_name);
          $examens->examens = $new_name;
        }

        $examens->save();

        session()->flash('success','L\'examen est ajoutée avec succée');

 return redirect('/admin/examens/'.$examens->id_module.'/all-examens');
   }
    public function edit($id){
     $examens = Cours::find($id);
      if($examens === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.examens.edit',compact('examens'));
   }
 }
    public function update($id,Request $request){
        
        $examens = Examens::find($id);
        $examens->nom_examens = $request->input('nom_examen'); 
        $examens->annee = $request->input('annee');
        $examens->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $examens->examens = $request->file('fichier');
          $new_name = rand(). '.' .  $examens->examens->getClientOriginalExtension();
          $examens->examens->move('Tds/',$new_name);
          $examens->examens = $new_name;
        }
       
        $tds->save();

        session()->flash('success','L\'examen est Modifier avec succée');

 return redirect('/admin/examens');
   }
    public function destroy($id){

        $examens = Examens::find($id);
        $examens->deleted = 1;
        $examens->save();
        
         session()->flash('success','L\'examens est supprimer avec succée');

 return redirect('/admin/examens');
  }

    public function show($id){

     $examens = Examens::find($id);
     if($examens === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.examens.show',compact('examens'));
   }
   }





    public function all_examens(){
    	$examens = Examens::where('deleted',0)->paginate(16);
    	return view('user.espace-elearning.examens.index',compact('examens'));
    }
  
    public function search_examens(Request $request)
    {
     if($request->get('nom_examens'))
     {
      $examen = $request->get('nom_examens');
      $examens = Examens::where('deleted',0)
        ->where('nom_examens', 'LIKE', "%{$examen}%")
        ->orwhere('annee',$examen)
        ->paginate(16);
      return view('user.espace-elearning.examens.index',compact('examens'));

     }
    }
    public function all_examens_in_module($id){
    	$module = Module::where('deleted',0)->where('id',$id)->first();
      if($module === null){
      return view('layouts.error_404');
    }else{
    	$examens = Examens::where('deleted',0)->where('id_module',$id)->paginate(12);
    return view('user.espace-elearning.examens.index',compact('examens','module'));
    }
}  
    public function add_examens($id){
            $module = Module::find($id);
            if($module === null){
      return view('layouts.error_404');
    }else{
    	return view('user.espace-elearning.examens.add-examens',compact('module'));
    }
   }

   public function store_examens(Examens $examens,EXamensRequest $request){
    
        $examens->nom_examens = $request->input('nom_examen'); 
        $examens->annee = $request->input('annee');
        $examens->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $examens->examens = $request->file('fichier');
          $new_name = rand(). '.' .  $examens->examens->getClientOriginalExtension();
          $examens->examens->move('examens/',$new_name);
          $examens->examens = $new_name;
        }

        $examens->save();

        session()->flash('success','L\'examen est ajoutée avec succée');
        return redirect('/module/'.$examens->id_module.'/all-examens');

 }

    public function search(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('nom_examens');
      $data = Examens::where('deleted',0)
        ->where('nom_examens', 'LIKE', "%{$query}%")
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a class="a" href="#">'.$row->nom_examens.'</a></li>';
       
      $output .= '</ul>';

      echo $output;
     }
    }
}

 public function find_examens(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Examens::where('nom_examens', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->nom_examens, 'text' => $tag->nom_examens];
        }

        return \Response::json($formatted_tags);
    }
}
