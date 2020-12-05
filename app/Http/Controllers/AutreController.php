<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\AutreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AutreController extends Controller
{
    
  public function index(){
    if(Auth::user()->id  ==1){
      $user = User::where('confirmation_admin',1)->where('genre','autre')->paginate(10);
          return view('admin.autre.index',compact('user'));
    }
    else{
    $universite = Auth::user()->universite;
      $user = User::where('genre','autre')->where('universite',$universite)->where('confirmation_admin',1)->paginate(10);
            return view('admin.autre.index',compact('user'));

    }
	}
  public function search_autre_index(Request $request){
      $name = $request->get('name');
      $universite = Auth::user()->universite;
      if(Auth::user()->id  ==1){
     $user = User::where('name','Like','%'.$name."%")->where('genre','autre')->where('confirmation_admin',1)->paginate(10);
      return view('admin.autre.index',compact('user'));
    }else{
       $user = User::where('name','Like','%'.$name."%")->where('genre','autre')->where('universite',$universite)->where('confirmation_admin',1)->paginate(8);
    }
  }

	public function create(){
		return view('admin.autre.add');
	}
  public function store(AutreRequest $request,User $user)
    {
    	//dd($request->name);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'grade'=> $request->grade,
            'genre'=> $request->genre,
            'specialite'=> $request->specialite,
            'confirmation_admin' => 1,
        ]);
    session()->flash('success','le membre est avec succée');

 return redirect('/autre');
    }

    public function edit($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.autre.edit',compact('user'));
   }
 }
    public function update($id,Request $request){

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->universite = $request->input('universite');
        $user->password = bcrypt($request->input('password'));
        $user->faculte = $request->input('faculte');
        $user->domaine = $request->input('domaine');
        $user->specialite = $request->input('specialite');
        $user->matricule = $request->input('matricule');

        $user->save();
          
         session()->flash('success',"le membre est modifier avec succée");

 return redirect('/autre');
   }
    public function destroy($id){
    if($id != 1){
        $user = User::find($id); // recupere les donnees de la bdd qui a une id=$id
        $user->delete();
          //$user = User::find($id);
          //$user->active = 0;
          //$user->save();
        
         session()->flash('success',"le membre est supprimer avec succée");

 return redirect('/autre');
    }else{
         session()->flash('warning','vous ne peuvent pas supprimer ce membre');

 return redirect('/autre');
      //  return redirect('/admin/users')->withFlashMessage('');
    }
  }

    public function show($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.autre.show',compact('user'));
   }
 }

}
