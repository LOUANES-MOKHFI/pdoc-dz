<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ressource;
use App\Books;
use App\Counter;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\DB;
use Charts;

class StaticsController extends Controller
{
   

   public function count_visitor()
{
    $users = Counter::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            ->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title("Total des visiteurs de PDOC")
            ->elementLabel("Total des visiteurs")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupByMonth(date('Y'), true);
        return view('admin.statistics.visitor_statistics',compact('chart'));

}
  public function count_visitor1()
{
   $count_visitor = Counter::count();
    $mois = date("m");
     $data = Counter::select(
                              DB::raw('date as month'),
                              DB::raw('count(*) as number'),
                          )->groupBy('date')->get();
        $array[] = ['Month','Number'];
        foreach ($data as $key => $value) {
          $array[++$key] = [$value->month,$value->number];
        }
   return view('admin.statistics.visitor_statistics')->with('month',json_encode($array));
}

       public function user()
      {      
  $data = User::select(
                         DB::raw('genre as gender'),
                         DB::raw('count(*) as number'),
                         )->where('confirmation_admin',1)->where('genre','!=',null)->groupBy('genre')->get();
        
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
  

      public function ressource()
      {
    /*All Ressources*/    
  $data = Ressource::select(
                         DB::raw('categorie_ressource as categorie'),
                         DB::raw('count(*) as number'),
                         )->where('deleted',0)->groupBy('categorie_ressource')->get();
        
        $array[] = ['Categorie','Number'];
        foreach ($data as $key => $value) {
          $array[++$key] = [$value->categorie,$value->number];
        }

    /*All Ressources DOC*/
    $data1 = Ressource::select(
                         DB::raw('domaine_ressource as domaine'),
                         DB::raw('count(*) as number'),
                         )->where('deleted',0)->where('categorie_ressource','ressource DOC')->groupBy('domaine_ressource')->get();
        
        $array1[] = ['Domaine','Number'];
        foreach ($data1 as $key => $value) {
          $array1[++$key] = [$value->domaine,$value->number];
        }
/*All Ressources AO*/
    $data2 = Ressource::select(
                         DB::raw('nationalite_ressource as region'),
                         DB::raw('count(*) as number'),
                         )->where('deleted',0)->where('categorie_ressource','Production scientifique des universités')->groupBy('nationalite_ressource')->get();
        
        $array2[] = ['Region','Number'];
        foreach ($data2 as $key => $value) {
          $array2[++$key] = [$value->region,$value->number];
        }
        return view('admin.statistics.ressource_statistics')->with('categorie',json_encode($array))->with('domaine',json_encode($array1))->with('region',json_encode($array2));
      }
     
   public function visitor()
      {      
  $data = User::select(
                         DB::raw('genre as gender'),
                         DB::raw('count(*) as number'),
                         )->where('confirmation_admin',1)->where('genre','!=',null)->groupBy('genre')->get();
        
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

}
