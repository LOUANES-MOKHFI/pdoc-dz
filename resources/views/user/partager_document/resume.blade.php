@extends('layouts.app')

@section('title')
    Affiche les Documents
@endsection
@section('header')


<style type="text/css">
a{
  color: blue;
  font-weight: bold;
  font-size: 17px;
  font-family: arial;
  padding: 0 0 0 0;
}
.text-center{
  float: center;
}

</style>

@endsection
@section('content')
<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Afficher Des Documents </span>
      </div>
</div>

<div class="card-body">
  <div class="alert alert-info text-center">
      <h3>Résume de: {{$document->titre_doc}} </h3> 
  </div>
    <div class="image group marketing">
        <div class="grid blog-desc" >
          <p  style="font-family: arial; font-size: 16px"> {{\Crypt::decrypt($document->description)}}.</p>
          </div>
        </div>
  
</div>
@endsection
@section('footer')

@endsection
