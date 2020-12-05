<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\RegistedUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*public function confirm($id,$token){
     
     $user = User::where('id', $id)->where('confirmation_token', $token)->first();

     if($user){
         $user->update(['confirmation_token'=> null]);
         $this->guard()->login($user);
         return redirect($this->redirectPath())->with('success','Votre Compte a bien étè confirmé');
     
     }
     else
     {
        return redirect('/login')->with('error','Ce lien ne semble plus valide');
     }

    }*/

 public function register(Request $request)
    {  
        
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
   
     

        //$user->notify(new RegistedUser());
      if($request->get('btn') == "Inscrire")
      {
 $user = User::where('email',$request->input('email'))->first();
 Session()->flash('success',"Votre compte a bien étè crée,continue avec le procédure de payement");
        return view('auth.paiement',compact('user'));
      }
      elseif ($request->get('btn') == "continuer") {
         return $this->registered($request, $user)
                        ?: redirect('/login')->with('success',"Votre compte a bien étè crée,une email de confirmation envoyer lors de la confirmation de votre demande");
      }
     
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
         
          if($data['genre'] == 'enseignant'){
 return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'genre' => ['required','string'],
            
        ]);
          }
          elseif($data['genre'] == 'etudiant'){

 return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'genre' => ['required','string'],
            'universite' => ['required','string','min:5'],
            'faculte' => ['required','string','min:5'],
            'matricule' => ['required','string','min:5'],
            'specialite' => ['required','string','min:3'],
            
        ]);
          }
          elseif($data['genre'] == 'bibliothécaire'){
           return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'genre' => ['required','string'],
            'universite' => ['required','string','min:3'],
            
        ]);
          }elseif($data['genre'] == 'autre'){
             return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'genre' => ['required','string'],
            'universite' => ['required','string','min:3'],
            'grade' => ['required','string','min:3'],
            'specialite' => ['required','string','min:3'],
            
        ]);
          }
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 

          if($data['genre'] == 'enseignant'){
   $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'universite' => $data['universite'],
            'genre' => $data['genre'],
            'specialite' => $data['specialite'],
            'grade' => $data['grade'],
            'confirmation_token' => str_replace('/' , '' ,bcrypt(str_random(16))),
        ]);
 return $user->save();
  
          }
          elseif($data['genre'] == 'etudiant'){
            //dd($data['domaine']);
   $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'universite' => $data['universite'],
            'genre' => $data['genre'],
            'faculte' => $data['faculte'],
            'specialite' => $data['specialite'],
            'matricule' => $data['matricule'],
            'confirmation_token' => str_replace('/' , '' ,bcrypt(str_random(16))),
        ]);

   return $user->save();
    
          }
          elseif($data['genre'] == 'bibliothécaire'){
          $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'universite' => $data['universite'],
            'genre' => $data['genre'],
            'confirmation_token' => str_replace('/' , '' ,bcrypt(str_random(16))),
        ]);
          return $user->save();
           // Session()->flash('success','votre compte a bie ete cree');
           
          }
          elseif($data['genre'] == 'autre'){
            $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'universite' => $data['universite'],
            'genre' => $data['genre'],
            'specialite' => $data['specialite'],
            'grade' => $data['grade'],
            'confirmation_token' => str_replace('/' , '' ,bcrypt(str_random(16))),
        ]);
          return  $user->save();
           // Session()->flash('success','votre compte a bie ete cree');
          
          }
        

    }
}
