<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stripe 
{
   public function charge($token,$amount){

   	$charge = Stripe::setApikey('pk_test_51GxJ9LLHBrLHzKL9xKUMo9BuRElquKuQzyj3KyfYDnH8rb8LfwxqZ4hFNowcZXTlWAUB0dAisxdFpR9dENMvPls8006bJILaja');

        Stripe::create([
          "amount" => $amount,
          "currency" => "usd",
          "source" => $token,
          "description" => "test charge"
        ]);
    
    dd($charge);
   }
}
