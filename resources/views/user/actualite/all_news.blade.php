@extends('layouts.app')

@section('title')
Tout les Actualites
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
 @if(count(All_news()) == null)
      
      <div class="container" style="margin-top: 20px">
        <div class="row alert alert-info text-center">
            <p>Aucun Actualité disponible </p>
        </div>
      </div>

    @else
<div class="wrap">  		 	       
    <div class="services_grid">
		<div class="content_bottom">
	    @foreach(All_news() as $news)
		  <div class="image group marketing">
			<div class="grid images_3_of_1">
		     <a href="{{'/actualites/'.$news->id}}"> <img  src="{{asset('/images/'.$news->image)}}" class="zoom img-fluid "  alt=""></a>
			</div>
				<div class="grid blog-desc" >
					<h4><a href="#">{{$news->titre}}</a></h4><span class="text-right">@if($news->nouveaute == 1)
                    <img style="height: 50px" src="/designe/images/unnamed.gif">
					@endif</span>
					<p>{{$news->description}}.</p>
			    <div class="view-all"><a href="{{'/actualites/'.$news->id}}">Plus d'infomation <i class="fas fa-arrow-circle-right"></i></a>
			    <p class="text-right">Publier le:{{date_format($news->created_at,'Y-m-d')}}</p>
			</div>
			    <div ></div>
			    </div>
		  	</div>
		  	<p style="color: red">----------------------------------------------------------------------------------------------------------------------</p>
		@endforeach
		{{All_news()->links()}}
		  </div>
    		</div>
    		<div class="sidebar">
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
 @endif
 @endsection

 @section('footer')

 @endsection