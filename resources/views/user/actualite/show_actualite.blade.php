@extends('layouts.app')

@section('title')
{{$actualite->titre}}
@endsection

@section('header')
   <style type="text/css">
    p {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
}

.view-all>a{
  color: #007bff;
  font-size: 18px
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
   </style>

@endsection
@section('content')
<div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Actualités </span>
      </div>
</div>
<div class="wrap">              
    <div class="services_grid">
    <div class="content_bottom">
      @if($actualite->nouveaute == 1)
        <p style="color:#000000; font-size: 20px">Nouveau .... Navigation gratuite pour un ensemble de bases de données</p>
      @endif
      <div class="image group marketing">
      <div class="grid images_3_of_1">
     <img  src="{{asset('/images/'.$actualite->image)}}" class="zoom img-fluid "  alt="{{$actualite->titre}}">
      </div>
        <div class="grid blog-desc" >
          <h4><a href="#">{{$actualite->titre}}</a></h4>
          <p >{{$actualite->description}}.</p>
          <div class="view-all">
          <p class="text-right">Publier le:{{date($actualite->created_at)}}</p>
           @if($actualite->lien != 0)
          Lien d'inscription:<a href="{{url($actualite->lien)}}">{{$actualite->lien}}</a>
          @endif
      </div>
          </div>
        </div>
        <hr>
      </div>
        </div>
        <div class="sidebar" style="margin-top: 30px">
            <div class="sidebar_left_top">
              <div class="services">
            <h3>Nouveauté</h3>
            <img style="width: 100%" src="/designe/images/aidmobarak.gif">
          <div class="services_list">
            <marquee direction="up" behavior="scroll" loop="-1" scrollamount="2" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()" height="300px">    
        
    <div class="sous_titre_actu" style="line-height: 30px; text-align: justify;">
        <p style="margin-left: 15px;font-size: 30px;color: red">عيدكم مبارك</p>
    </div>
    <br>
            
        
   <div class="sous_titre_actu" style="line-height: 20px; text-align: justify;">
      <p style="margin-left: 15px;">
        <a style="" href="">Vous pouvez utiliser des ressource en periode d'essai... profitez les </a>
      </p>
    </div>
    <br>
            
        
    <div class="sous_titre_actu" style="line-height: 20px; text-align: justify;">
      <p style="margin-left: 15px;">
        <a style="" href="">  يمكنكم التسجيل في موقعنا و الأستفادة من مختلف خدماتنا</a>
      </p>
    </div>
    <br>
    <br>
            
       </marquee>
         
         </div>
   </div>
  </div>
</div> 
    <div class="clear"></div>
 </div>
 @endsection

 @section('footer')

 @endsection