@extends('user.dashboard.dashboard')

@section('title')
      Liste des dcouments
@endsection

@section('header')
   <style type="text/css">
   	.text-center{
  float: center;
}
.body {
  font-family: "Poppins", sans-serif;
  background:#F0F8FF;

}
  .error{
        outline: 1px solid #f00;
      }

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: #e9e9eb;
    color: #666;
    padding-top: 15px;
    padding-bottom: 15px;
}

.table .table-img img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #bbbbbb;
    -webkit-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -moz-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -ms-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    text-shadow: 0 0 black;
}

.table .team-member-sm {
    width: 32px;
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    transition: all 0.25s ease;
}
.table .team-member {
    position: relative;
    width: 30px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
    display: inline-block;
}

.table .order-list li img {
    border: 2px solid #ffffff;
    box-shadow: 4px 3px 6px 0 rgba(0,0,0,0.2);
}
.table .team-member img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0;
    border-radius: 1000px;
}
.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}
thead{
    background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
 
}
.tr td{
  font-size: 16px;
  font-weight: bold;
}
.uppercase{
  text-transform: uppercase;
}
   </style>
@endsection

@section('content')


<div class="body">
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <section class="content">

    
     <div class="card-body">
<div class="col-md-12 col-12 col-sm-12">
    @if(count($catalogues) == null)
                <div class="container">
                  <div class="alert alert-danger text-center">
                    <p>Aucun Document ajouter</p>
                  </div>
                </div>
             @else
    <div class="card">
      
      <div class="card-header row">
       
        <div class="col-md-8 col-sm-8 left">
          <h3 class="uppercase">Liste des dcouments ajoutée</h3>
        </div>
        <div class="col-md-4 col-sm-4 right">
          <h5 class="uppercase">{{count($catalogues)}} Documents partagée</h5>
        </div>
    
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
             <thead>
              <tr class="tr">
                <td width="300">Titre</td>
                <td width="250">domaine</td>
                <td width="170">Anneé d'edition</td>
                <td width="320">Action</td>
              <!--td>Enseignant</td-->
              </tr>
             </thead>
             @foreach($catalogues as $document1)
                    <tr>
                        
                        <td>{{$document1->etablissement}}</td>
                        <td>{{$document1->structure}}</td>
                        <td>{{$document1->thematique}}</td>
                        <td>
                          @if($document1->confirmation == 1)
                            <a href="" class="btn btn-success" style="width: 150px">document Confirmer</a>
                          @elseif($document1->confirmation == 0)
                            <a href="" class="btn btn-warning" style="width: 175px">document Non confirmer</a>
                            @endif
                           <a href="{{'/user/catalogue/'.$document1->id}}" class="btn btn-info" style="width: 90px">modifier</a>
                         </td>
                    </tr>
                @endforeach
            <tbody>
            </tbody>
          </table>
             {{$catalogues->links()}}
        </div>
      </div>
    </div>
    @endif
  </div>
 </div>
 </div>
   </div>

 

@endsection

@section('footer')

@endsection
