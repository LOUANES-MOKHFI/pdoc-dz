<?php  

namespace Tests\Unit;

use Tests\TestCase;
use \App\Stripe;
/**
 * 
 */
class StripeTest extends TestCase
{
	
	
const LAST4 = [
      'tok_visa' => '4242',
];
	public function it works(){

		$stripe = app(Stripe::class);

		$last4 = $strip->charge('tok_visa',10 * 100);

		$this->assertEquals(self::LAST4['tok_visa'],$last4);
	}
}

?>