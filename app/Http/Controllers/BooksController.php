<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Http\Requests\BooksRequest;
use carbon\Carbon;
use Session;
use App\Cart;
use App\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Stripe\Charge;
use Stripe\Stripe;

class BooksController extends Controller
{
  public function index(){
    $books = Books::where('deleted',0)->where('confirmation',1)->orderBy('titre')->paginate(10);

      return view('admin.books.index',compact('books'));
	}
 public function index_book_add(){
    $books = Books::where('deleted',0)->where('confirmation',0)->orderBy('titre')->paginate(10);

      return view('admin.books.demande-add',compact('books'));
  }
   public function search_book_index(Request $request){
      $book = $request->get('book');
      $books = Books::where('deleted',0)->where('titre','Like','%'.$book."%")
      ->orwhere('auteur','Like','%'.$book."%")->where('confirmation',1)->paginate(10)->appends('book',$book);
      return view('admin.books.index',compact('books'));
  }

public function filter_book($sujet){
       
      //$book = $request->get('sujet');
     
      if($sujet == 'all-book'){
        $books = Books::where('deleted',0)->where('confirmation',1)->orderBy('id','desc')->paginate(15);
      return view('user.books.index',compact('books','all_books'));
      }
      else
      {
        $books = Books::where('deleted',0)->where('sujet','Like','%'.$sujet."%")->where('confirmation',1)->orderBy('id','desc')->paginate(15)->appends('domaine',$sujet); 

      return view('user.books.index',compact('books'));
      }
}

public function filter_book_price($price){
       
      //$book = $request->get('sujet');
      if($price == 'gratuit'){
        $books = Books::where('deleted',0)->where('prix',null)->where('confirmation',1)->orderBy('id','desc')->paginate(15)->appends($price,null);
      return view('user.books.index',compact('books'));

      }
      elseif($price == 'payante')
      {
         $books = Books::where('deleted',0)->where('prix','!=',0)->where('confirmation',1)->orderBy('id','desc')->paginate(15)->appends($price,'!=',null); 

      return view('user.books.index',compact('books'));
      }

      //count($books);
 

     // return json_encode($books);
//return response()->json(array('books'=> $books));

}

	public function create(){
		return view('admin.books.add');
	}
    public function add_book(){
    return view('user.books.add-book');
  }
  public function store(BooksRequest $request,Books $books)
    {
      $id_user = Auth::user()->id;
          // dd($request->input('titre'));
        $books->titre = $request->input('titre'); 
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->adress_bib = $request->input('adress_bib');
        $books->isbn = $request->input('isbn');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->parution = $request->input('parution');
        $books->id_user = $id_user;

         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
  // $actualite->image = $request->image->store('image');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
      //  $books->livre_pdf = $request->livre_pdf->store('livre');
        }

       
          $books->confirmation = 1;
        $books->save();

        session()->flash('success','Le livre est ajoutée avec succée');
        return redirect('/admin/books');
    }
    public function store_book(BooksRequest $request,Books $books)
    {
     $id_user = Auth::user()->id;
        $books->titre = $request->input('titre'); 
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->adress_bib = $request->input('adress_bib');
        $books->isbn = $request->input('isbn');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->parution = $request->input('parution');
        $books->id_user = $id_user;
         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
        if(Auth::user()->id==1){
          $books->confirmation = 1;
        }
        else
       {
          $books->confirmation = 0;
       }
        $books->save();

        session()->flash('success','Le livre est ajoutée avec succée');
        return redirect('/books');
    }

   public function confirmer($id){
          $books = Books::find($id);
          $books->confirmation = 1;
          $books->save();
        
         session()->flash('success',"Le livre est Confirmer avec succée");

    return redirect('/admin/books');  
   }
    public function rejeter($id){
          $books = Books::find($id);
          $books->confirmation = 0;
          $books->save();
        
         session()->flash('success',"Le livre est rejeter avec succée");

    return redirect('/admin/books');  
   }

    public function edit($id){
      $book = Books::find($id);
       if($book === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.books.edit',compact('book'));
   }
 }
    public function update($id,Request $request){
              $id_user = Auth::user()->id;
        $books = Books::find($id);
        $books->titre = $request->input('titre');
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->adress_bib = $request->input('adress_bib');
        $books->isbn = $request->input('isbn');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->parution = $request->input('parution');
         $books->id_user = $id_user;
         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
        $books->save();
          
         session()->flash('success',"Le livre est modifiée avec succée");

 return redirect('/admin/books');
   }
    public function destroy($id){
          $books = Books::find($id);
          $books->deleted = 1;
          $books->save();
        
         session()->flash('success',"Le livre est supprimée avec succée");

    return redirect('/admin/books');  
  }

    public function show($id){
     $book = Books::find($id);
      if($book === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.books.show',compact('book'));
   }
 }
  public function show_book_add($id){
     $book = Books::find($id);
      if($book === null){
      return view('admin.layouts.error_404');
    }else{
     return view('admin.books.show_book_add',compact('book'));
   }
 }

   public function show_book($titre,$sujet){    

    $book = Books::where('titre',$titre)->where('sujet',$sujet)->first();
    if($book === null){
      return view('layouts.error_404');
    }
    else{
     $now = Carbon::now();
    return view('user.books.show_book',compact('book','now'));
    }
   }

    public function search_book(Request $request){
      $book = $request->get('book');
      $books = Books::where('deleted',0)->where('titre','Like','%'.$book."%")
      ->orwhere('auteur','Like','%'.$book."%")->where('confirmation',1)->orderBy('id','desc')->paginate(15)->appends('book',$book); 

    
        return view('user.books.index',compact('books'));
        }
   



  public function getadd_to_cart(Request $request,$id) 
   { 
     
    
      $book = Books::find($id); 

      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
   
      $cart->add($book,$book->id);
    
      $request->session()->put('cart',$cart); 
         session()->flash('success',"Le livre est ajouter au panier");
      return redirect()->back();
       

   }

  
public function getRemove($id){
    
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $cart->remove($id);
    Session::put('cart',$cart);

     session()->flash('success',"Le livre est supprimer du panier");
      return redirect()->back();
  

}


public function getCart(){
    if(!Session::has('cart')){
      return view('user.books.cart');
    } 
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
          return view('user.books.cart',['books'=> $cart->items, 'totalprix'=>$cart->totalprix]);

   }

   public function getCheckout(){
    if(!Session::has('cart')){
      return view('user.books.cart');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $total = $cart->totalprix;
      return view('user.books.checkout',['total'=> $total]);
   }

public function postcheckout(Request $request){
  //dd($request>input('stripeToken'));
 if(!Session::has('cart')){
      return redirect()->route('user.book.cart');
    }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApikey('sk_test_51GxJ9LLHBrLHzKL9muYye5eqjjV2QWPYJgF10oxG6J91b5sqImbmZqFL5NjeKmtrFMDSaqbtPVKBfvPjjVtQan6d00HIfj9Zgy');
      try {
        $charge = Charge::create(array(
          "amount" => $cart->totalprix * 100,
          "currency" => "usd",
          "source" => $request->input('stripeToken'),
          "description" => "vente de livre"
        ));
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->payenment_id = $charge->id;

        Auth::user()->orders()->save($order);

      } catch (\Exception $e) {
        return redirect()->route('checkout')->with('error' ,'verifier les informations de votre card');
      }

      Session::forget('cart');
      return redirect()->route('books')->with('success','L\'achat de(s) livre(S) est effectue');

}




public function delete($id,Request $request)
    {
        $books = session('cart');
        foreach ($books as $key => $value)
        {
          
                           
                unset($value[$id]);            
            
        }
        //put back in session array without deleted item
        $request->session()->push('cart',$books);
        //then you can redirect or whatever you need
        return redirect()->back();
    }


public function add_book_author(){
  return view('user.books.add-book-author');
}
  public function store_book_author(BooksRequest $request,Books $books)
    {
      $id_user = Auth::user()->id;
        $books->titre = $request->input('titre'); 
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->pays_edition = $request->input('pays_edition');
        $books->parution = $request->input('date_edition');
        $books->nbr_page = $request->input('nbr_page');
        $books->format = $request->input('format');
        $books->isbn10 = $request->input('isbn10');
        $books->isbn13 = $request->input('isbn13');
        $books->isbn = $request->input('isbn');
        $books->mot_cle = $request->input('mot_cle');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->prix_f = $request->input('prix_f');
  $books->id_user = $id_user;

        if($request->input('resume') == null){
          session()->flash('resume',"Insérée votre résume s'il vous plait");
          return redirect('/add-book-author');
        }
          else{
          $resume = \Crypt::encrypt($request->input('resume'));
          $books->resume = $resume;
        }

         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
         if($request->hasFile('sommaire'))
        {
           $books->sommaire = $request->file('sommaire');
      $new_name = rand(). '.' .  $books->sommaire->getClientOriginalExtension();
        $books->sommaire->move('sommaire/',$new_name);
        $books->sommaire = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
        if(Auth::user()->id==1){
          $books->confirmation = 1;
        }
        else
       {
          $books->confirmation = 0;
       }
        $books->save();

        session()->flash('success','Le livre est ajoutée avec succée');
        return redirect('/books');
    }


     public function getbook_user(){
       $id = Auth::user()->id;
    $books = Books::where('deleted',0)->where('id_user', $id)->orderBy('titre')->paginate(10);
      return view('user.dashboard.books',compact('books'));
  }

  public function editbook_user($id){
  $id_user = Auth::user()->id;
      $book = Books::where('id',$id)->where('id_user', $id_user)->first();
       if($book === null){
      return view('layouts.error_404');
    }else{
     return view('user.dashboard.edit_book',compact('book'));
   }
 }
    public function updatebook_p_user($id,Request $request){
              $id_user = Auth::user()->id;
        $books = Books::find($id);
         $books->titre = $request->input('titre'); 
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->pays_edition = $request->input('pays_edition');
        $books->parution = $request->input('date_edition');
        $books->nbr_page = $request->input('nbr_page');
        $books->format = $request->input('format');
        $books->isbn10 = $request->input('isbn10');
        $books->isbn13 = $request->input('isbn13');
        $books->isbn = $request->input('isbn');
        $books->mot_cle = $request->input('mot_cle');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->prix_f = $request->input('prix_f');
        $books->id_user = $id_user;

        if($request->input('resume') == null){
          session()->flash('resume',"Insérée votre résume s'il vous plait");
          return redirect('/add-book-author');
        }
          else{
          $resume = \Crypt::encrypt($request->input('resume'));
          $books->resume = $resume;
        }

         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
         if($request->hasFile('sommaire'))
        {
           $books->sommaire = $request->file('sommaire');
      $new_name = rand(). '.' .  $books->sommaire->getClientOriginalExtension();
        $books->sommaire->move('sommaire/',$new_name);
        $books->sommaire = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
 $books->save();
          
         session()->flash('success',"Le livre est modifiée avec succée");

 return redirect('/user/books');
   }

   
   public function updatebook_g_user($id,Request $request){
              $id_user = Auth::user()->id;
        $books = Books::find($id);
        $books->titre = $request->input('titre');
        $books->auteur = $request->input('auteur');
        $books->editeur = $request->input('editeur');
        $books->langue = $request->input('langue');
        $books->adress_bib = $request->input('adress_bib');
        $books->isbn = $request->input('isbn');
        $books->sujet = $request->input('sujet');
        $books->prix = $request->input('prix');
        $books->parution = $request->input('parution');
         $books->id_user = $id_user;
         if($request->hasFile('image'))
       {
        $books->image = $request->file('image');
      $new_name = rand(). '.' . $books->image->getClientOriginalExtension();
        $books->image->move('images/',$new_name);
        $books->image = $new_name;
   //$actualite->image = $request->image->store('image');
        }
         if($request->hasFile('livre_pdf'))
        {
           $books->livre_pdf = $request->file('livre_pdf');
      $new_name = rand(). '.' .  $books->livre_pdf->getClientOriginalExtension();
        $books->livre_pdf->move('livre/',$new_name);
        $books->livre_pdf = $new_name;
       // $books->livre_pdf = $request->livre_pdf->store('livre');
        }
        $books->save();
          
         session()->flash('success',"Le livre est modifiée avec succée");

 return redirect('/user/books');
   }
    public function destroybook_user($id){
          $books = Books::find($id); 
          $books->deleted = 1;
          $books->save();
        
         session()->flash('success',"Le livre est supprimée avec succée");

    return redirect('/user/books');  
  }

public function updateDownloadCount(){
 $id = $_GET['id'];
 $book = Books::find($id);

 $book->download_counter++;
$book->save();
 // your database update logic
}
public function updateViewCount(){
 $id = $_GET['id'];
 $book = Books::find($id);

 $book->view++;
$book->save();
 // your database update logic
}
}
