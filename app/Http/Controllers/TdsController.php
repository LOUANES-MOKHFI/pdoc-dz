<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tds;
use \App\Module;
use App\Http\Requests\TdsRequest;
class TdsController extends Controller
{
   
 public function index(){
        $tds = Tds::where('deleted',0)->paginate(8);//where('active',1)->get();
      return view('admin.espace-elearning.tds.index',compact('tds'));
   }
  public function all_tds_in_module1($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
      if($module === null){
      return view('admin.layouts.error_404');
    }else{
      $tds = Tds::where('deleted',0)->where('id_module',$id)->paginate(10);
      return view('admin.espace-elearning.tds.index',compact('tds','module'));
    }
  }

   public function search_tds_index(Request $request){
      $name = $request->get('nom_tds');
      $tds = Tds::where('nom_td','Like','%'.$name."%")->paginate(10);
      return view('admin.espace-elearning.tds.index',compact('tds'));
  }

   public function create($id){
    $module = Module::where('deleted',0)->where('id',$id)->first();
    if($module === null){
      return view('admin.layouts.error_404');
    }else{
    return view('admin.espace-elearning.tds.add',compact('module'));
   }
   }
   
   public function store(TdsRequest $request,Tds $tds){
      
      
        $tds->nom_td = $request->input('nom_tds'); 
        $tds->annee = $request->input('annee');
        $tds->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $tds->td = $request->file('fichier');
          $new_name = rand(). '.' .  $tds->td->getClientOriginalExtension();
          $tds->td->move('Tds/',$new_name);
          $tds->td = $new_name;
        }

        $tds->save();

        session()->flash('success','Le Td est ajoutée avec succée');

 return redirect('/admin/tds/'.$tds->id_module.'/all-tds');
   }
    public function edit($id){
     $tds = Cours::find($id);
      if($tds === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.tds.edit',compact('tds'));
   }
 }
    public function update($id,Request $request){
        
        $tds = Tds::find($id);

      
        $tds->nom_cours = $request->input('nom_cours'); 
        $tds->annee = $request->input('annee');
        $tds->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $tds->tds = $request->file('fichier');
          $new_name = rand(). '.' .  $tds->tds->getClientOriginalExtension();
          $tds->tds->move('Tds/',$new_name);
          $tds->tds = $new_name;
        }
       
        $tds->save();

        session()->flash('success','Le tds est Modifier avec succée');

 return redirect('/admin/tds');
   }
    public function destroy($id){

        $tds = Tds::find($id);
        $tds->deleted = 1;
        $tds->save();
        
         session()->flash('success','Le tds est supprimer avec succée');

 return redirect('/admin/tds');
  }

    public function show($id){

     $tds = Tds::find($id);
     if($tds === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.espace-elearning.tds.show',compact('tds'));
   }
   }





    public function all_tds(){
    	$tds = Tds::where('deleted',0)->paginate(16);
    	return view('user.espace-elearning.tds.index',compact('tds'));
    }
  
    public function search_td(Request $request)
    {
     if($request->get('nom_td'))
     {
      $tds = $request->get('nom_cours');
      $tds = Tds::where('deleted',0)
        ->where('nom_td', 'LIKE', "%{$tds}%")
        ->orwhere('annee',$tds)
        ->paginate(16);
      return view('user.espace-elearning.tds.index',compact('tds'));

     }
    }
    public function all_tds_in_module($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
      if($module === null){
      return view('layouts.error_404');
    }else{
    	$tds = Tds::where('deleted',0)->where('id_module',$id)->paginate(12);
    	return view('user.espace-elearning.tds.index',compact('tds','module'));
    }
  }

    public function add_tds($id){
      $module = Module::where('deleted',0)->where('id',$id)->first();
      if($module === null){
      return view('layouts.error_404');
    }else{
    	return view('user.espace-elearning.tds.add-tds',compact('module'));
    }
}

   public function store_tds(Tds $tds,TdsRequest $request){
    
        $tds->nom_td = $request->input('nom_td'); 
        $tds->annee = $request->input('annee');
        $tds->id_module = $request->input('id_module');
         if($request->hasFile('fichier'))
        {
          $tds->td = $request->file('fichier');
          $new_name = rand(). '.' .  $tds->td->getClientOriginalExtension();
          $tds->td->move('Tds/',$new_name);
          $tds->td = $new_name;
        }

        $tds->save();
        session()->flash('success','Le td est ajoutée avec succée');
        return redirect('/module/'.$tds->id_module.'/all-tds');

 }


    public function search(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('nom_td');
      $data = Tds::where('deleted',0)
        ->where('nom_td', 'LIKE', "%{$query}%")
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a class="a" href="#">'.$row->nom_td.'</a></li>';
       
      $output .= '</ul>';

      echo $output;
     }
    }
}


 public function find_tds(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Tds::where('nom_td', 'LIKE', '%'.$term.'%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->nom_td, 'text' => $tag->nom_td];
        }

        return \Response::json($formatted_tags);
    }
}
