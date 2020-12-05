<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
class StudentController extends Controller
{  
  public function index(){
    if(Auth::user()->id  ==1){
      $user = User::where('genre','etudiant')->where('confirmation_admin',1)->paginate(10);
          return view('admin.student.index',compact('user'));
    }
    else{
    $universite = Auth::user()->universite;
      $user = User::where('genre','etudiant')->where('confirmation_admin',1)->where('universite',$universite)->paginate(10);
            return view('admin.student.index',compact('user'));

    }
  }
  public function search_student_index(Request $request){
      $name = $request->get('name');
      $universite = Auth::user()->universite;
      if(Auth::user()->id  ==1){
     $user = User::where('genre','etudiant')->where('confirmation_admin',1)->where('name','Like','%'.$name."%")->paginate(10);
      return view('admin.student.index',compact('user'));
    }else{
       $user = User::where('name','Like','%'.$name."%")->where('genre','etudiant')->where('confirmation_admin',1)->where('universite',$universite)->paginate(10);
    }
  }

  public function create(){
    return view('admin.student.add');
  }
  public function store(StudentRequest $request,User $user)
    {
      //dd($request->name);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'universite'=> $request->universite,
            'faculte'=> $request->faculte,
            'genre'=> $request->genre,
            'domaine'=> $request->domaine,
            'specialite'=> $request->specialite,
            'matricule'=> $request->matricule,
            'confirmation_admin' => 1,
        ]);
    session()->flash('success','Vous etes insctier avec succée');

 return redirect('/student');
    }

    public function edit($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.student.edit',compact('user'));
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
          
         session()->flash('success',"L'étudiant est modifier avec succée");

 return redirect('/student');
   }
    public function destroy($id){
    if($id != 1){
        $user = User::find($id); // recupere les donnees de la bdd qui a une id=$id
        $user->delete();
          //$user = User::find($id);
          //$user->active = 0;
          //$user->save();
        
         session()->flash('success',"L'etudiant' est supprimer avec succée");

 return redirect('/student');
    }else{
         session()->flash('warning','vous ne peuvent pas supprimer ce membre');

 return redirect('/student');
      //  return redirect('/admin/users')->withFlashMessage('');
    }
  }

    public function show($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.student.show',compact('user'));
   }
 }

   public function profil(){
    $user = Auth::user();
    return view('user.profil',compact('user'));
   }
}
