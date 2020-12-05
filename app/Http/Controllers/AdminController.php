<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tracker;

use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use \App\MAil\SendMail;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{

       public function statistics()
      {
        
  $data = User::select(
                         DB::raw('genre as gender'),
                         DB::raw('count(*) as number'),
                         )->where('confirmation_admin',1)->groupBy('genre')->get();
        
        $array[] = ['Gender','Number'];
        foreach ($data as $key => $value) {
          $array[++$key] = [$value->gender,$value->number];
        }


  $data1 = User::select(
                         DB::raw('universite as university'),
                         DB::raw('count(*) as number'),
                         )->where('confirmation_admin',1)->where('universite','!=',null)->groupBy('universite')->get();
        
        $array1[] = ['University','Number'];
        foreach ($data1 as $key => $value) {
          $array1[++$key] = [$value->university,$value->number];
        }
 $teacher = User::select('*')->where('genre','enseignant')->count();
 $student = User::select('*')->where('genre','etudiant')->count();
 $autre = User::select('*')->where('genre','autre')->count();

        return view('admin.statistics.index',compact('teacher','student','autre'))->with('gender',json_encode($array))->with('university',json_encode($array1));
      }

   public function view(){
    	return view('admin.index');
    }
public function profil(){
      return view('admin.profil');
    }

   public function index(){
        $user = User::where('admin',1)->where('confirmation_admin',1)->paginate(10);//where('active',1)->get();
    	return view('admin.admin.index',compact('user'));
   }


   public function search_admin_index(Request $request){
      $name = $request->get('name');
      $user = User::where('admin',1)->where('confirmation_admin',1)->where('name','Like','%'.$name."%")->paginate(10);
      return view('admin.admin.index',compact('user'));
  }

   public function create(){

   	return view('admin.admin.add');
   }

   
   public function store(AdminRequest $request,User $user){
      $user->create([
            'name'  => $request->name,
            'email' => $request->email,
            'admin' => $request->admin,
            'password' => bcrypt($request->password),
            'universite' => $request->universite,
            'confirmation_admin' => 1
        ]);
      session()->flash('success',"L'administrateur' est ajouter avec succée");

 return redirect('/administrateur');
   }
    public function edit($id){
     $user = User::find($id);
      if($user === null){
      return view('layouts.error_404');
    }else{
   	 return view('admin.admin.edit',compact('user'));
   }
 }
    public function update($id,Request $request){

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->universite = $request->input('universite');
        $user->password = bcrypt($request->input('password'));

        $user->save();
          
         session()->flash('success',"L'administrateur est modifier avec succée");

 return redirect('/administrateur');
   }
    public function destroy($id){
    if($id != 1){
        $user = User::find($id); // recupere les donnees de la bdd qui a une id=$id
        $user->delete();
          //$user = User::find($id);
          //$user->active = 0;
          //$user->save();
        
         session()->flash('success','Le membre est supprimer avec succée');

 return redirect('/administrateur');
    }else{
         session()->flash('warning','vous ne peuvent pas supprimer ce membre');

 return redirect('/administrateur');
      //  return redirect('/admin/users')->withFlashMessage('');
    }
  }

    public function show($id){

   	 $user = User::find($id);
     if($user === null){
      return view('layouts.error_404');
    }else{
     return view('admin.admin.show',compact('user'));
   }
   }

    public function all_demande(){
      if(Auth::user()->id == 1){
         $demande = User::where('confirmation_admin' , 0)->get();
       }else{
       $universite_admin = Auth::user()->universite;
       $demande = User::where('confirmation_admin' , 0)->where('universite',$universite_admin)->get();
     }
      return view('admin.demande_confirmation.index',compact('demande'));
    }
    public function show_demande($id){
      $user = User::find($id);
       if($user === null){
      return view('layouts.error_404');
    }else{
     return view('admin.demande_confirmation.show_demande',compact('user'));
    }
  }
    public function rejeter($id){

        $demande = User::find($id); // recupere les donnees de la bdd qui a une id=$id
          $demande->confirmation_admin = 0;
          $demande->save();
        
         session()->flash('success','Le membre est rejeter avec succée');

 return redirect('/demande_confirmation');
    }

    public function confirmer($id){
      if(Auth::user()->id == 1){
               $demande = User::where('id',$id)->first(); // recupere les donnees de la bdd qui a une id=$id
          $demande->confirmation_admin = 1;
          $demande->confirmed_at = now();
          $demande->save();

          $to_name = $demande->name;
            $to_email = $demande->email;
            $data = array('name'=>$to_name, "body" => "Votre inscription dans la plateform PDOC est confirmer,vous peuvez accéder à la plateforme et uliliser les défferents ressources, www.pdoc-dz.com/login");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('INSCRIPTION PDOC');
//->line('Lien PDOC', url('www.pdoc-dz.com/register'));
$message->from('louanes.mokhfi@gmail.com','Inscription PDOC');
});
      }else{
         $universite_admin = Auth::user()->universite;

        $demande = User::where('id',$id)->where('universite',$universite_admin)->first(); // recupere les donnees de la bdd qui a une id=$id
          $demande->confirmation_admin = 1;
          $demande->confirmed_at =now();
          $demande->save();

          $to_name = $demande->name;
            $to_email = $demande->email;
            $data = array('name'=>$to_name, "body" => "Votre inscription dans la plateform PDOC est confirmer,vous peuvez accéder à la plateforme et uliliser les défferents ressources, www.pdoc-dz.com/login");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('INSCRIPTION PDOC');
//->line('Lien PDOC', url('www.pdoc-dz.com/register'));
$message->from('louanes.mokhfi@gmail.com','Inscription PDOC');
});
      }
         
        
         session()->flash('success','Le membre est Confirmer avec succée');

 return redirect('/demande_confirmation');
    }
public function delete_essaye(){


  
}
   /*Profil*/ 

   public function update_email(Request $request){
    $id = Auth::user()->id;
    $user = User::find($id);
    $user->email = $request->input('email');
    $user->save();
    if($user->admin == 1){
 session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/admin/profil');
    }
    else{
       session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/profil');
    }
   

   }

    public function update_information(Request $request){
    $id = Auth::user()->id;
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->universite = $request->input('etablissement');
    $user->faculte = $request->input('faculte');
    $user->domaine = $request->input('domaine');
    $user->specialite = $request->input('specialite');
    $user->matricule = $request->input('matricule');

    $user->save();
     if($user->admin == 1){
 session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/admin/profil');
    }
    else{
       session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/profil');
    }
   

   }

    public function update_password(Request $request){
    $id = Auth::user()->id;
    $user = User::find($id);
    $user->password = bcrypt($request->input('password'));


    $user->save();
    if($user->admin == 1){
 session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/admin/profil');
    }
    else{
       session()->flash('success','La modification de l\'adress mail est faite avec succeé');
    return redirect('/profil');
    }
   
   }
}
