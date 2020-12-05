<?php 
namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalprix = 0;
	public $id;

	public function __construct($oldCart){
		if($oldCart){
			$this->id = $oldCart->id;
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalprix = $oldCart->totalprix;

		}
	}

	public function add($item,$id){
		$storedItem = ['id'=>$id,'qty'=>0,'price'=>$item->prix,'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];

			}
		}

		$storedItem['qty']++;
		$storedItem['price'] = $item->prix * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty++;
		$this->totalprix +=$item->prix;
		$this->id = $item->id;

	}
	public function remove($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalprix -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
?>