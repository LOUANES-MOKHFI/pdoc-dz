<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use App\User;
class SubscribeController extends Controller
{
   
   public function postCheckout(Request $request){
   	//dd($request->input('stripeToken'));
   	  $email = $request->input('email');
 $user = User::where('email',$email)->first();
   	$amount = $request->input('amount');
   	 Stripe::setApikey('sk_test_51GxJ9LLHBrLHzKL9muYye5eqjjV2QWPYJgF10oxG6J91b5sqImbmZqFL5NjeKmtrFMDSaqbtPVKBfvPjjVtQan6d00HIfj9Zgy');
      try {
        $charge = Charge::create(array(
          "amount" => $amount * 100,
          "currency" => "usd",
          "source" => $request->input('stripeToken'),
          "description" => "Abonement PDOC"
        ));
       
         $user->abonnee = 1;
         $user->confirmation_admin = 1;
         $user->abonned_at = now();
         $user->confirmed_at = now();
         $user->save();


      } catch (\Exception $e) {

        Session()->flash('danger' ,'verifier les informations de votre card');
       // return redirect()->back()->with('danger' ,'verifier les informations de votre card');
        return view('auth.paiement',compact('user'));
      }
   }

public function getUser(Request $request){
  $email = $request->get('email');
  $user = User::where('email',$email)->first();
  if($user->abonnee == 1){
    return redirect()->back()->with('success','Vous etes abonnee dans notre plateform pdoc');
  }else{
     return view('auth.paiement',compact('user'));
  }
 
}
  
}
