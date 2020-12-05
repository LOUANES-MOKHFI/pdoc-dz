<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Ressource;
use App\Catalogue;
use App\Counter;
use App\Document;
use App\User;
use carbon\Carbon;
use \App\MAil\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request,Counter $counter)
    {
       $ip = $request->ip();
      $date = date('Y-m-d');
      $heur = date('H:i:s');
        $visitor = Counter::select('*')->where('ip',$ip)->latest()->first();
        if(!empty($visitor))
        {
            $now = Carbon::now();
             
            if($now->diffInHours($visitor->heur)==0)
            {

            }else
            {
             $counter->create([
                        'ip'  => $ip,
                        'date' => $date,
                        'heur' => $heur,
                    ]);
           }

        }
       else
       {
 $counter->create([
            'ip'  => $ip,
            'date' => $date,
            'heur' => $heur,
        ]);
        }
        
         $user1 = User::all();
 
      //dd(now()->diffInDays($user->confirmed_at));
        foreach ($user1 as $user) {
 //echo $user->abonnee.'<br>';
  if($user->abonnee == 0){
    
    if(now()->diffInDays($user->confirmed_at) > 10){

      // echo now()->diffInDays($user->confirmed_at).'<br>';
        if($user->confirmation_admin == 1){

          $user->confirmation_admin = 0;
            $user->save();

            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=>$to_name, "body" => "L'équipe pdoc vous informer que votre periode d'esaai dans la plateform pdoc est terminer, si vous veulez acceder a notre plateforme vous etes obliger d'abonnee avec notre systeme");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('ABONNEMENT PDOC');
//->line('Lien PDOC', url('www.pdoc-dz.com/register'));
$message->from('louanes.mokhfi@gmail.com','Abonement PDOC');
});
}
      

    }
  }
  elseif($user->abonnee == 1){
      if(now()->diffInDays($user->abonned_at) > 365){
           if($user->confirmation_admin == 1){

          $user->confirmation_admin = 0;
            $user->save();

            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=>$to_name, "body" => "L'équipe pdoc vous informer que votre abonement dans la plateform pdoc est terminer, si vous veulez renouvlez votre abonement veuillez accéder a notre plateform, www.pdoc-dz.com/login");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('ABONNEMENT PDOC');
//->line('Lien PDOC', url('www.pdoc-dz.com/register'));
$message->from('louanes.mokhfi@gmail.com','Abonement PDOC');
});
}
      }

  }
}
        return view('user.home');
    }
    
    public function dashboard()
    {
        return view('user.dashboard.index');
    }
     public function books(){
     $all_books = Books::where('deleted',0)->where('confirmation',1)->get(); 

    $books = Books::where('deleted',0)->where('confirmation',1)->Orderby('id','desc')->paginate(15);
      return view('user.books.index',compact('books','all_books'));
  }

      public function news()
    {
        return view('user.actualite.all_news');
    }

     public function docabout()
    {
        return view('user.ressource_doc.about');
    }
     public function elearning_about()
    {
        return view('user.espace-elearning.about');
    }
     public function books_about()
    {
        return view('user.books.about');
    }
     public function documentabout()
    {
        return view('user.partager_document.about');
    }
     public function catalogueabout()
    {
        return view('user.catalogue_bib.about');
    }
     public function aoabout()
    {
        return view('user.ressource_ao.about');
    }
    public function st()
    {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','SCIENCES ET TECHNIQUES')
        ->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_doc.science&technique',compact('ressourceDOC'));
    }
    public function slv()
    {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','SCIENCES DE LA VIE ET DE LA TERRE')
       ->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_doc.science_vie&terre',compact('ressourceDOC'));
    }
    public function shs()
    {
        $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','SCIENCES HUMAINES ET SOCIALES')
        ->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_doc.science_humaine&social',compact('ressourceDOC'));
    }
    public function multidisciplinares()
    {
         $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','MULTIDISCIPLINAIRES')->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_doc.multidisciplinaire',compact('ressourceDOC'));
    }
     public function pluridisciplinaire()
    {
         $ressourceDOC = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->where('domaine_ressource','PLURIDISCIPLINAIRES')
         ->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_doc.pruridisciplinaire',compact('ressourceDOC'));
    }
    public function algeriennes()
    {
        $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Algériennes')->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_ao.algerienne',compact('ressourceAO'));
    }
    public function etrangeres()
    {
         $ressourceAO = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->where('nationalite_ressource','Etrangères')->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_ao.etrangere',compact('ressourceAO'));
    }

    public function rpe()
    {
        $ressourcePE = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(15);
        return view('user.ressource_rpe',compact('ressourcePE'));
    }
    
    public function cours()
    {
        return view('user.cours');
    }
   
    public function about()
    {
        return view('user.about');
    }
    public function FAQ()
    {
        return view('user.FAQ');
    }
     public function demande_article()
    {
        return view('user.demande_article');
    }
     public function demande_livre()
    {
        return view('user.books.demande_livre');
    }
      public function document()
    {
        return view('user.partager_document.document');
    }
      public function search_document()
    {
        return view('user.partager_document.search_document');
    }
     public function catalogue_universite_algerienne()
    {
        $catalogues = Catalogue::where('deleted',0)->where('nationalite_catalogue','algerienne')->paginate(15);
        return view('user.catalogue_bib.algerienne',compact('catalogues'));
    }
     public function catalogue_universite_etrangere()
    {
        $catalogues = Catalogue::where('deleted',0)->where('nationalite_catalogue','etrangere')->paginate(15);
        return view('user.catalogue_bib.etrangere',compact('catalogues'));
    }
     public function add_catalogue_universite()
    {
        return view('user.catalogue_bib.add-catalogue-bibliotheque');
    }
   public function bibliographie_modules()
    {
        return view('user.bibliographie_modules.index');
    }
    
public function search(Request $request){
      $word = $request->get('search');
      $select = $request->get('select');
    
      if($select == 'LIVRES'){
        if($word == null){
 $books = Books::where('deleted',0)->paginate(16);
 $count_books = Books::where('deleted',0)->where('titre','Like','%'.$word.'%')->orWhere('sujet','Like','%'.$word.'%')->count();
           $books->withPath('/search-all/');
        }
        else{
           $books = Books::where('deleted',0)->where('titre','Like','%'.$word.'%')->orWhere('sujet','Like','%'.$word.'%')->get();
$count_books = Books::where('deleted',0)->where('titre','Like','%'.$word.'%')->orWhere('sujet','Like','%'.$word.'%')->count();
           
          }
        
    return view('user.global_search.index',compact('word','books','select','count_books'));

      }

      elseif($select == 'RESSOURCES DOC'){
         if($word == null){
           $ressourcedoc = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')->orderBy('nom_ressource')
             ->paginate(15);
      $count_ressourcedoc = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
      ->where('nom_ressource','like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();

         $ressourcedoc->withPath('/search-all/');
         }
          else{
 $ressourcedoc = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
      ->where('nom_ressource','like','%'.$word.'%')->orderBy('nom_ressource')
     ->get();
      $count_ressourcedoc = Ressource::where('deleted',0)->where('categorie_ressource','ressource DOC')
      ->where('nom_ressource','like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();

       
          }


           return view('user.global_search.index',compact('word','ressourcedoc','select','count_ressourcedoc'));

      }
      elseif($select == 'BDDs EN TEST'){
        if($word == null){
           $ressourcepe = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")->orderBy('nom_ressource')->paginate(15);
      $count_ressourcepe = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();
      
        }
    else{
 $ressourcepe = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->get();
      $count_ressourcepe = Ressource::where('deleted',0)->where('categorie_ressource',"reesource en periode d'essai")
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();
    }

     
           return view('user.global_search.index',compact('word','ressourcepe','select','count_ressourcepe'));

      }
      elseif($select == 'ARCHIVES OUVERTS'){
        if($word == null){
           $ressourceao = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->paginate(15);
            $ressourceao->withPath('/search-all/');

     $count_ressourceao = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();
   }else{
      $ressourceao = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->get();
     $count_ressourceao = Ressource::where('deleted',0)->where('categorie_ressource','Production scientifique des universités')
      ->where('nom_ressource','Like','%'.$word.'%')->orderBy('nom_ressource')
     ->count();
     }
           return view('user.global_search.index',compact('word','ressourceao','select','count_ressourceao'));

      }
      elseif ($select == 'DOCUMENTS') {
      if($word == null){
 $document = Document::where('deleted',0)
      ->where('titre_doc','Like','%'.$word.'%')
      ->orWhere('domaine_document','Like','%'.$word.'%')->orderBy('titre_doc')
     ->paginate(15);
            $document->withPath('/search-all/');

        $count_document = Document::where('deleted',0)
      ->where('titre_doc','Like','%'.$word.'%')
      ->orWhere('domaine_document','Like','%'.$word.'%')->orderBy('titre_doc')
     ->count();
      }else{
         $document = Document::where('deleted',0)
      ->where('titre_doc','Like','%'.$word.'%')
      ->orWhere('domaine_document','Like','%'.$word.'%')->orderBy('titre_doc')
     ->get();
        $count_document = Document::where('deleted',0)
      ->where('titre_doc','Like','%'.$word.'%')
      ->orWhere('domaine_document','Like','%'.$word.'%')->orderBy('titre_doc')
     ->count();
      }


        
           return view('user.global_search.index',compact('word','document','select','count_document'));

      }

      
     
    }

public function paiement(){
    return view('auth.paiement');
  }
  public function paiement_user(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('auth.paiement',compact('user'));
  }

  public function reclamation(){
    return view('user.reclamation');
  }

public function register_teacher(){
    return view('auth.register-teacher');
  }
public function register_bibliothecaire(){
    return view('auth.register-bibliothecaire');
  }
public function register_autre(){
    return view('auth.register-autre');
  }

  
}













