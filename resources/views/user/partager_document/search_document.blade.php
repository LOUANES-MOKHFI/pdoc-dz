@extends('layouts.app')

@section('title')
    Rechercher Des Documents
@endsection
@section('header')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<style type="text/css">

.firma-ara{
    padding-bottom: 100px;
    padding-top: 100px;
}
.form-arka-plan{
  margin-top: 0px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}
.acik-renk-form{
    background: rgba(255, 255, 255, 0.58);
}
.siyah-cerceve{
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
}


select[type=text1],select[type=text2],select[type=text3],  input[type=url], textarea,.select2{
    display: block;
    color: #494949;
    letter-spacing: 0.3px;
   height: 40px;
   width: 100%;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}

a, button, input[type=button], input[type=submit], label {
    cursor: pointer;

}
input[type=submit]:hover, .pagination div.nav a:hover, div.download a, div.download a:hover, #single #comments nav.pagination a:hover, .widget .nice-select:focus {
    border-color: #004d6d;
}

input[type=submit] {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    font-size: 14px;
    padding: 7px 25px;
    border-radius: 25px;
    border: 2px solid transparent;
    letter-spacing: 0.3px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    border-radius: 25px;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    font-size: 18px;
    padding: 10px 30px;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}
a, button, input[type=button], input[type=submit], label {
    cursor: pointer;
}

user agent stylesheet
input[type="submit" i] {
    -webkit-appearance: push-button;
    user-select: none;
    white-space: pre;
    align-items: flex-start;
    text-align: center;
    cursor: default;
    color: buttontext;
    background-color: buttonface;
    box-sizing: border-box;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonface;
    border-image: initial;
}


.form-group-lg .form-control {
    height: 100px;
    font-size: 25px;
    line-height: 1.3333333;
    border-radius: 6px;
}
.select2-results ul li{
  display: block;
}







  .jumbotron label {
    font-size:12px;    
}

.reg-icon{
    color:#5bc0de;
    font-weight:bold;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4) !important;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #5bc0de;
}

.prj-name{
    font-weight:bold;
    color:#5bc0de;
}



.text-center{
  float: center;
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
  font-size: 17px;
  font-weight: bold;
}

.gray-bg {
    background: #f9f9f3;
}
.property {
    padding: 10px 0;
    margin-bottom: 0px;
    background-color: #fafafa;
}
.wrapper {
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
    padding-left: 50px;
    width: 80%;
    margin: auto;
}
.row {
    margin: 0px;
    padding: 0px;
    width: 100%;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}
[class*="col-"] {
    padding: 10px;
}
[class*="col-"] {
    padding: 10px;
}
.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
@media (min-width: 1200px)
.col-lg-4 {
    width: 33.33333333%;
}
.search_bt {
    /* background-color: #ffffff; */
    padding: 15px;
    /* color: #ffffff; */
    /* text-align: center; */
    font-size: 14px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
.tab_alph, .index_rev, .search_bt {
    background-color: #FFFFFF;
    border: 1px solid #D6D6D6;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -moz-box-shadow: 0 0 5px #ccc;
    -webkit-box-shadow: 0 0 5px #ccc;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    padding: 10px;
}
.search_bt {
    /* background-color: #ffffff; */
    padding: 15px;
    /* color: #ffffff; */
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
form {
    display: block;
    margin-top: 0em;
}
.form-group {
    margin-bottom: 15px;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-control {
    border: 1px solid #c3c3c3;
    border-radius: 15px;
}
.form-control {
    border: 1px solid #e2e2e4;
    box-shadow: none;
    /* color: #c2c2c2; */
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
input, textarea, select, button {
    outline: none !important;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
input {
    line-height: normal;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
.uppercase{
    text-transform: uppercase;
}
.offer-danger {
    border-color: #d9534f;
}
.offer-radius {
    border-radius: 7px;
}
.offer {
    background: #fff;
    border: 1px solid red;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    margin: 15px 0;
    overflow: hidden;
}
.offer-danger {
    border-color: #d9534f;
}
.offer-radius {
    border-radius: 7px;
}
.offer-danger {
    border-color: #d9534f;
}
.offer-radius {
    border-radius: 7px;
}
.offer {
    /* background: #fff; */
    border: 1px solid #ddd;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    margin: 15px 0;
    overflow: hidden;
}
.offer-danger .shape {
    border-color: transparent #d9534f transparent transparent;
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-danger .shape {
    border-color: transparent #d9534f transparent transparent;
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-danger .shape {
    border-color: transparent #d9534f transparent transparent;
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -40px;
    top: 2px;
    white-space: nowrap;
    -ms-transform: rotate(30deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
}
.shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -40px;
    top: 2px;
    white-space: nowrap;
    -ms-transform: rotate(30deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
}
.shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -40px;
    top: 2px;
    white-space: nowrap;
    -ms-transform: rotate(30deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
}
.shape {
    border-style: solid;
    border-width: 0 70px 40px 0;
    float: right;
    height: 0px;
    width: 0px;
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
.shape {
    border-style: solid;
    border-width: 0 70px 40px 0;
    float: right;
    height: 0px;
    width: 0px;
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
.shape {
    border-style: solid;
    border-width: 0 70px 40px 0;
    float: right;
    height: 0px;
    width: 0px;
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
.offer-content {
    padding: 0 20px 10px;
}
.offer-content {
    padding: 0 20px 10px;
}
.offer-content {
    padding: 0 20px 10px;
}
@media (min-width: 768px)
.lead {
    font-size: 21px;
}
.lead {
    margin-bottom: 20px;
    font-size: 17px;
    font-weight: bold;
    line-height: 1.4;
}


.article {
    /* background-color: #48cfadbf; */
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
.lientitre:link {
    color: #0663D7;
    text-decoration: none;
}
.levation-8dp{
    font-size: 15px;
}
</style>

@endsection
@section('content')


<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Rechercher Des Documents </span>
      </div>
</div> 

<div class="property gray-bg">
    <div class="">
        <div class="row" >
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3  wow fadeInLeft" style="margin-top: 10px">
                <div class="aside search_bt">
                    <div class="bs-example1" id="DIV_revue">
                        @include('layouts.flash_msg')
                        <form method="get" action="{{ url('search_document') }}">
                        <div class="form-group">
                             <select name="type_doc" class="form-control">
                              <option value="">--type de document--</option>
                              @foreach(All_type_doc() as $type)
                                <option value="{{$type->type_doc}}">{{$type->type_doc}} &thinsp;&thinsp;&thinsp;(<span style="color: blue">{{count_type($type->type_doc)}}</span>)</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                             <select name="annee_edition" class="form-control">
                                <option value="">--Annee d'edition--</option>
                            @foreach(Annee_edition_doc() as $annee)
                                <option value="{{$annee->annee_edition}}">{{$annee->annee_edition}} &thinsp;&thinsp;&thinsp;(<span style="color: blue">{{count_annee($annee->annee_edition)}}</span>)</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                             <select name="domaine_document" class="form-control">
                                <option value="">--Domaine--</option>
                            @foreach(All_domaine_doc() as $domaine)
                                <option value="{{$domaine->domaine_document}}">{{$domaine->domaine_document}} &thinsp;&thinsp;&thinsp;(<span style="color: blue">{{count_domaine($domaine->domaine_document)}}</span>)</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group " id="div-titreRevue">
                        <label for="titre_doc">Mots du Titre 
                        </label>
                        <select type="text1" class="select2 form-control"  id="titre_document" name="titre_document"  value="{{ old('domaine_document') }}" autocomplete="domaine_document" autofocus placeholder="Domaine de document"></select>
                    </div>
                    <div class="form-group" id="div-titreRevue">
                        <label for="titreRevue">Auteur 
                        </label>
                         <select id="auteur"  type="text3" class="select2 form-control form-control-lg" name="auteur" value="{{ old('auteur') }}" autocomplete="auteur" autofocus placeholder="Auteur"></select> 
                    </div>
                     <div class="form-group " id="div-titreRevue">
                        
                        <input type="submit" name="search" class="btn btn-primary" value="Rechercher">
                    </div>
                        </form>
                    </div>
                </div>

                <div class="offer offer-radius offer-danger">
            <div class="shape">
                <div class="shape-text">

                    New
                </div>
            </div>
            <div class="offer-content">
                <h3 class="lead">
                    Nouveaux Documents 
                </h3>

                <div class="aside" style="box-shadow:none; margin: -10px;  text-align:justify;">
                    @foreach(new_add_document() as $document1)
                    <article class="article">
                    <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <h5>
                           @if($document1->fichier != Null)<a href="{{ asset('/document/'.$document1->fichier )}}" target="_blank" class=" lientitre">{{$document1->titre_doc}}</a>
                           @elseif($document1->lien != Null)
                           <a href="{{url($document1->lien)}}" target="_blank" class=" lientitre">{{$document1->titre_doc}}</a>
                             @elseif($document1->url != Null)
                           <a href="{{url($document1->url)}}" target="_blank" class=" lientitre">{{$document1->titre_doc}}</a>
                           @else
                           <a href="{{url('/document/'.$document1->id )}}" class=" lientitre">Résume de: {{$document1->titre_doc}}</a>
                           @endif
                                   </h5>
                                </div>
                    </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
            </div>
            <div class="col-xs-12 col-md-9 col-sm-9 col-lg-9 wow fadeInRight animated">
                <div class="row">
                    
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    @if(isset($_GET['search']))
           @if(count($document) == null)
                <div class="container">
                  <div class="alert alert-danger text-center">
                    <p>Aucun document n'exite dans ce mot ci-dessus, mérci de refaire votre rechreche</p>
                  </div>
                </div>
             @else
    <div class="card">
      <div class="card-header row">
         <div class="left col-md-8">
            <h4 class="uppercase">liste des docuemnts <span>@if(!empty($annee_edition)) pour l'année {{$annee_edition}}@endif</span></h4>
        </div>
        <div class="right col-md-4">
            <h6 class="uppercase">{{count($document)}}&thinsp;&thinsp;Document(s) trouvée(s)</h6>
        </div>
       
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
             <thead>
              <tr class="tr">
                <td width="200">Titre</td>
                <td width="150">Type de document</td>
                <td width="150">Auteur(s) </td>
                <td width="150">Domaine</td>
              <!--td>Enseignant</td-->
              </tr>
             </thead>
             @foreach($document as $document1)
                    <tr>
                        <td width="100">
                          @if($document1->fichier != Null)<a href="{{ asset('/document/'.$document1->fichier )}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @elseif($document1->lien != Null)
                           <a href="{{url($document1->lien)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                             @elseif($document1->url != Null)
                           <a href="{{url($document1->url)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @else
                           <a href="{{url('/document/'.$document1->id )}}" class=" elevation-8dp">Résume de: {{$document1->titre_doc}}</a>
                           @endif
                         </td>
                        <td>{{$document1->type_doc}}</td>
                        <td>{{$document1->auteur_doc}}</td>
                        <td>{{$document1->domaine_document}}</td>
                        <!--td>{{$document1->name_enseignant}}</td-->
                    </tr>
                @endforeach
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
                    @else
    <div class="card">
      <div class="card-header">
       <div class="left col-md-8">
            <h4 class="uppercase">liste des docuemnts </h4>
        </div>
        <div class="right col-md-4">
            <h6 class="uppercase"><span style="color: blue">{{count_All_document()}} </span>&thinsp;&thinsp;&thinsp;Document(s) existe(s)</h6>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
             <thead>
              <tr class="tr">
                <td>Titre</td>
                <td>Type de document</td>
                <td>Auteur(s) </td>
                <td>Domaine</td>
                <!--td>Enseignant</td-->
              </tr>
             </thead>
             @foreach(All_document() as $document1)
                    <tr>
                        <td>
                          @if($document1->fichier != Null)<a href="{{ asset('/document/'.$document1->fichier )}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @elseif($document1->lien != Null)
                           <a href="{{url($document1->lien)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                            @elseif($document1->url != Null)
                           <a href="{{url($document1->url)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @else
                           <a href="{{url('/document/'.$document1->id )}}" class=" elevation-8dp">Résume de: {{$document1->titre_doc}}</a>
                           @endif
                         </td>
                        <td>{{$document1->type_doc}}</td>
                        <td>{{$document1->auteur_doc}}</td>
                        <td>{{$document1->domaine_document}}</td>
                        <!--td>{{$document1->name_enseignant}}</td-->
                    </tr>
                @endforeach
            <tbody>
            </tbody>
          </table>
             {{All_document()->links()}}
        </div>
      </div>
    </div>
    @endif
                </div>
            </div>



        </div>
    </div>
</div>



@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
       $('#domaine_document').select2({
            placeholder: "Domaine de document",
            minimumInputLength: 2,
            ajax: {
                url: '/domaine/find_domaine',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
       
        $('#titre_document').select2({
            placeholder: "Titre de document",
            minimumInputLength: 2,
            ajax: {
                url: '/titre/find_titre',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });

         $('#auteur').select2({
            placeholder: "Auteur",
            minimumInputLength: 2,
            ajax: {
                url: '/auteur/find_auteur',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>
@endsection
