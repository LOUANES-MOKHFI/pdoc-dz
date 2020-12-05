<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogue;
use App\Http\Requests\CatalogueRequest;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends Controller
{
    public function index(){
    $catalogues = Catalogue::where('deleted',0)->paginate(10);

      return view('admin.catalogue.index',compact('catalogues'));
	}

   public function search_catalogue_index(Request $request){
      $catalogue = $request->get('etablissement');
      $catalogues = Catalogue::where('etablissement','Like','%'.$catalogue."%")->paginate(10);
      return view('admin.catalogue.index',compact('catalogues'));
  }

	public function create(){
		return view('admin.catalogue.add');
	}
  public function store(CatalogueRequest $request,Catalogue $catalogue)
    {
        $catalogue->etablissement = $request->input('etablissement'); 
        $catalogue->structure = $request->input('structure');
        $catalogue->url = $request->input('url');
        $catalogue->thematique = $request->input('thematique');
        $catalogue->nationalite_catalogue = $request->input('nationalite_catalogue');
        $catalogue->id_user = Auth::user()->id;

        $catalogue->save();

        session()->flash('success','Le catlogue est ajoutée avec succée');
        return redirect('/admin/catalogue');
    }

    public function edit($id){
      $catalogue = Catalogue::find($id);
       if($catalogue === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.Catalogue.edit',compact('catalogue'));
   }
 }
    public function update($id,Request $request){

        $catalogue = Catalogue::find($id);
        $catalogue->etablissement = $request->input('etablissement'); 
        $catalogue->structure = $request->input('structure');
        $catalogue->url = $request->input('url');
        $catalogue->thematique = $request->input('thematique');
        $catalogue->id_user = Auth::user()->id;

        $catalogue->save();
          
         session()->flash('success',"Le catalogue est modifiée avec succée");

 return redirect('/admin/catalogue');
   }
    public function destroy($id){
          $catalogue = Catalogue::find($id);
          $catalogue->deleted = 1;
          $catalogue->save();
        
         session()->flash('success',"Le catalogue est supprimée avec succée");

    return redirect('/admin/catalogue');  
  }

    public function show($id){
     $catalogue = Catalogue::find($id);
      if($catalogue === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.catalogue.show',compact('catalogue'));
   }
 }

   public function show_catalogue(){    
    $catalogue = catalogue::where('deleted',0)->first();
    if($catalogue === null){
      return view('layouts.error_404');
    }
    else{
    return view('user.catalogue.show_catalogue',compact('catalogue'));
    }
      
   }

   function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Catalogue::where('deleted',0)->where('nationalite_catalogue','algerienne')->where('etablissement', 'like', '%'.$query.'%')
         ->orderBy('id', 'ASC')
         ->get();
         
      }
      else
      {
       $data = Catalogue::where('deleted',0)->where('nationalite_catalogue','algerienne')->orderBy('id', 'ASC')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>

         <td>'.$row->etablissement.'</td>
         <td>'.$row->structure.'</td>
         <td><a href="'.$row->url.'">'.$row->url.'</a></td>
         <td>'.$row->thematique.'</td>
        </tr>
        ';
       }

      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun catalogue existe</td>
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

    
      function action_etrangere(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Catalogue::where('deleted',0)->where('nationalite_catalogue','etrangere')->where('etablissement', 'like', '%'.$query.'%')
         ->orderBy('etablissement')
         ->get();
         
      }
      else
      {
       $data = Catalogue::where('deleted',0)->where('nationalite_catalogue','etrangere')->orderBy('etablissement')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->etablissement.'</td>
         <td>'.$row->structure.'</td>
         <td><a href="'.$row->url.'">'.$row->url.'</a></td>
         <td>'.$row->thematique.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun catalogue existe</td>
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

 public function ajouter_catalogue(CatalogueRequest $request,Catalogue $catalogue)
    {
        $catalogue->etablissement = $request->input('etablissement'); 
        $catalogue->structure = $request->input('structure');
        $catalogue->url = $request->input('url');
        $catalogue->thematique = $request->input('thematique');
        $catalogue->nationalite_catalogue = $request->input('nationalite_catalogue');
        $catalogue->id_user = Auth::user()->id;
        $catalogue->save();

        session()->flash('success','Votre catalogue est ajoutée avec succée');
        return redirect('/add-catalogue-bibliotheque');
    }

   
         public function getcatalogues_user(){
       $id = Auth::user()->id;
    $catalogues = Catalogue::where('deleted',0)->where('id_user', $id)->orderBy('etablissement')->paginate(15);
      return view('user.dashboard.catalogues',compact('catalogues'));
  }

  public function editcatalogues_user($id){
  $id_user = Auth::user()->id;
      $catalogue = Catalogue::where('id',$id)->where('id_user', $id_user)->first();

       if($catalogue === null){
      return view('admin.layouts.error_404');
    }else{
     return view('user.dashboard.edit_catalogue',compact('catalogue'));
   }
 }
 
    public function updatecatalogues_user($id,Request $request){
        $catalogue = Catalogue::find($id);
        $id_user = Auth::user()->id;
        $catalogue->etablissement = $request->input('etablissement'); 
        $catalogue->structure = $request->input('structure');
        $catalogue->url = $request->input('url');
        $catalogue->thematique = $request->input('thematique');
        
        $catalogue->save();

        
         session()->flash('success',"Le catalogue est modifiée avec succée");

 return redirect('/user/catalogues');
   }

    public function destroycatalogue_user($id){
          $catalogue = Catalogue::find($id);
          $catalogue->deleted = 1;
          $catalogue->save();
        
         session()->flash('success',"Le catalogue est supprimée avec succée");

    return redirect('/user/catalogues');  
  }
}
