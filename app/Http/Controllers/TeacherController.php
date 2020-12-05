<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
class TeacherController extends Controller
{  
	public function index(){
       $universite = Auth::user()->universite;
       if(Auth::user()->id == 1){
      $user = User::where('genre','enseignant')->where('confirmation_admin',1)->paginate(10);
      return view('admin.teacher.index',compact('user'));
    }
    else{
      $user = User::where('genre','enseignant')->where('confirmation_admin',1)->where('universite',$universite)->paginate(10);
       return view('admin.teacher.index',compact('user'));
    }
    }

    public function search_teacher_index(Request $request){
      $name = $request->get('name');
      $universite = Auth::user()->universite;
      if(Auth::user()->id == 1){
      $user = User::where('genre','enseignant')->where('confirmation_admin',1)->where('name','Like','%'.$name."%")->paginate(10);
      return view('admin.teacher.index',compact('user'));
    }else{
      $user = User::where('name','Like','%'.$name."%")->where('confirmation_admin',1)->where('genre','enseignant')->where('universite',$universite)->paginate(10);
      return view('admin.teacher.index',compact('user'));
    }
  }

    public function create(){
        return view('admin.teacher.add');
    }
  public function store(TeacherRequest $request,User $user)
    {
       // dd($request->genre);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'universite'=> $request->universite,
            'genre'=> $request->genre,
            'grade'=> $request->grade,
            'specialite'=> $request->specialite,
            'confirmation_admin' => 1,

        ]);
    session()->flash('success',"L'enseignant est ajouter avec succée");

 return redirect('/teacher');
    }
    public function edit($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.teacher.edit',compact('user'));
   }
 }
    public function update($id,Request $request){

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->universite = $request->input('universite');
        $user->password = bcrypt($request->input('password'));
        $user->specialite = $request->input('specialite');
        $user->grade = $request->input('grade');

        $user->save();
          
         session()->flash('success',"L'enseignant est modifier avec succée");

 return redirect('/teacher');
   }
    public function destroy($id){
    if($id != 1){
        $user = User::find($id); // recupere les donnees de la bdd qui a une id=$id
        $user->delete();
          //$user = User::find($id);
          //$user->active = 0;
          //$user->save();
        
         session()->flash('success',"L'enseignant est supprimer avec succée");

 return redirect('/teacher');
    }else{
         session()->flash('warning','vous ne peuvent pas supprimer ce membre');

 return redirect('/teacher');
      //  return redirect('/admin/users')->withFlashMessage('');
    }
  }

    public function show($id){
     $user = User::find($id);
      if($user === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.teacher.show',compact('user'));
}
   }
}
