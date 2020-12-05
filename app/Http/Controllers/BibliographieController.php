<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bibliographie;
use App\Http\Requests\BiblographieRequest;
use \App\Reference;
use App\Http\Requests\ReferenceRequest;

class BibliographieController extends Controller
{
   public function index(){
      $modules = Bibliographie::where('deleted',0)->paginate(10);
      return view('admin.bibliographie_modules.index',compact('modules')); 
    }
public function create(){
      return view('admin.bibliographie_modules.add'); 
    }
     public function search_module_index(Request $request){
      $name = $request->get('name');
      $modules = Bibliographie::where('module','Like','%'.$name."%")
      ->orwhere('faculte','Like','%'.$name."%")
      ->orwhere('etablissement','Like','%'.$name."%")
      ->orwhere('specialite','Like','%'.$name."%")
      ->paginate(10);
      return view('admin.bibliographie_modules.index',compact('modules'));
  }

public function store(Bibliographie $module,BiblographieRequest $request){
        
        $module->module = $request->input('module'); 
        $module->etablissement = $request->input('etablissement');
        $module->faculte = $request->input('faculte');
        $module->specialite = $request->input('specialite');
       
         if($request->hasFile('fichier'))
        {
          $module->lien = $request->file('fichier');
          $new_name = rand(). '.' .  $module->lien->getClientOriginalExtension();
          $module->lien->move('module/',$new_name);
          $module->lien = $new_name;
        }
            $module->save();
            $lastid = $module->id;

        session()->flash('success','Le Module est ajoutée avec succée,Voulez-vous ajouter les references de module?');
        return view('admin.bibliographie_modules.add',compact('lastid'));
        }
       public function show($id){
        $reference = Reference::where('deleted',0)->where('id_bibliographie',$id)->first();
        return view('admin.bibliographie_modules.reference_bibliographique.show',compact('reference')); 
    }
        
    public function all_modules(){
    	$modules = Bibliographie::where('deleted',0)->paginate(20);
    	return view('user.bibliographie_modules.index',compact('modules')); 
    }

     public function add_module(){
    	return view('user.bibliographie_modules.add'); 
    }

    public function store_module(Bibliographie $module,BiblographieRequest $request){
        
        $module->module = $request->input('module'); 
        $module->etablissement = $request->input('etablissement');
        $module->faculte = $request->input('faculte');
        $module->specialite = $request->input('specialite');

       
         if($request->hasFile('fichier'))
        {
	        $module->lien = $request->file('fichier');
	        $new_name = rand(). '.' .  $module->lien->getClientOriginalExtension();
	        $module->lien->move('module/',$new_name);
	        $module->lien = $new_name;
        }
            $module->save();
            $lastid = $module->id;

        session()->flash('success','Le Module est ajoutée avec succée,Voulez-vous ajouter les references de module?');
        return view('user.bibliographie_modules.add',compact('lastid'));
        }
        
    public function show_module($id){
        $module = Bibliographie::where('deleted',0)->where('id',$id)->first();
        return view('user.bibliographie_modules.reference_bibliographique.show',compact('module'));
    }

      function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Bibliographie::where('deleted',0)
         ->where('module', 'like', '%'.$query.'%')
         ->orWhere('etablissement', 'like', '%'.$query.'%')
         ->orWhere('faculte', 'like', '%'.$query.'%')
         ->orWhere('specialite', 'like', '%'.$query.'%')
         ->orWhere('lien', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();  
      }
      else
      {
       $data = Bibliographie::where('deleted',0)->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->module.'</td>
         <td>'.$row->etablissement.'</td>
         <td>'.$row->faculte.'</td>
         <td>'.$row->specialite.'</td>
         <td><a href="'.url('/bibliographie-des-modules/'.$row->id).'">Voir les réferences</a></td>
         <td><a href="'.asset('module/'.$row->lien).'" target="_blank">Télècharger</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="6">Aucun Module existe</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}