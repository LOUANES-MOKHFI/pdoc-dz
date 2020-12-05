@extends('layouts.app')

@section('title')
  Livres
@endsection
@section('header')
 

<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css">

<style type="text/css">

  .views-row .item .item-inner-item {
    overflow: hidden;
}
.views-row .views-field-field-image-cache-fid .field-content {
    position: relative;
}
.views-field-field-image-cache-fid .field-content .newest-edition {
    position: absolute;
    margin-bottom: 45px;
    left: 0px;
    z-index: 5;
    height: 95px;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
.tg-frontcove a img {
    transition-delay: 0s;
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: ease-in-out;
}
.tg-backcover p{
  font-size: 16px;
  margin-bottom: 0px
}
.tg-backcover .bold{
  font-weight: bold;
  font-size: 14px;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.img:hover {
  transform: rotateY(30deg);
}

  .body {
  font-family: "Poppins", sans-serif;
      background:#F0F8FF;
      margin-bottom: 0px;
}
.btn-default{
  width: 230px;
}


.caret,.btn-default span{
  font-size: 20px;
 color: #212529;
}
.dropdown-menu li a option{

  font-size: 14px;
  color: #212529;
}
.add-to-cart a {
  display: block;
  width: 150px;
}
.items {
    position:relative;
    padding-top:0px;
    display:inline-block;
}
.notify-badge{
    position: absolute;
    right:75px;
    top:35px;
    background:red;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    padding:5px 10px;
    font-size:20px;
}
.a span,i{
  display: inline;
}
.btn-info{
  width: 100%;
}
</style>

@endsection
@section('content')
    <div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Livres</span>
      </div>
    </div>
    <div class="body">
      
    <div class="">
    <br/>
    <div class="row justify-content-center">
 <div class="col-12 col-md-10 col-lg-8">
     <form class=" card-sm" action="{{url('/show_book')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Titre de livre.." name="book">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
 </div>
</div>
</div>      
    @if(count($books) == null)
      
      <div class="container">
        <div class="row alert alert-info text-center">
            <p>Aucun livre disponible </p>
        </div>
      </div>

    @else
   
<div class="container text-center">
 
        @include('layouts.flash_msg')
</div>

      <div class="container" style="margin-top: 20px;margin-left: 20px" >
          <div class="sidebar">
            <div class="sidebar_left_top">
              <div class="services">
            <h3 style="width: 230px">Filtre</h3>
        <div class="view-filters" style="margin-bottom: 30px">
        <div>
          <div class="views-exposed-form">
            <div class="views-exposed-widgets clear-block">
              <div class="views-exposed-widget views-widget-filter-tid">
               <li class="dropdown">
                
                <a href="#" class="btn btn-default card" data-toggle="dropdown" style="width: 233px;height: 40px"><span>Tout les domaines <i class="fa fa-chevron-down" aria-hidden="true" style="font-size: 17px"></i> </span>
                </a>
                <ul class="dropdown-menu">
                 <li>  
                  <a href="{{url('/books')}}" name="sujet" class="dropdown-item">
                      <option value="all-book" class="option">Tout les domaines (<span>{{Count_AllBooks()}}</span>)</option>
                  </a>         
                  @foreach(getSujetBook() as $book)
                    <a href="{{url('books/'.$book->sujet)}}" name="sujet"  class="dropdown-item">
                      <option value="{{$book->sujet}}" class="option">{{$book->sujet}} (<span>{{count_book($book->sujet)}}</span>)</option>
                    </a>
                  @endforeach
                 </li>
                </ul>
               </li>

                <li class="dropdown">
                  
                <a href="#" class="btn btn-default card" data-toggle="dropdown" style="width: 233px;height: 40px"><span>Tout les prix <i class="fa fa-chevron-down" aria-hidden="true" style="font-size: 17px"></i> </span>
                </a>
                <ul class="dropdown-menu">
                 <li>  
                  <a href="{{url('/books')}}" name="price" class="dropdown-item">
                      <option value="all-book" class="option">Tout les prix (<span>{{Count_AllBooks()}}</span>)</option>
                  </a>   
                   <a href="{{url('/books-price/gratuit')}}" name="price" class="dropdown-item">
                    <option value="all-book" class="option">Gratuit (<span>{{Count_AllBooks_g()}}</span>)</option>
                  </a> 
                   <a href="{{url('/books-price/payante')}}" name="price" class="dropdown-item">
                      <option value="all-book" class="option">Payante (<span>{{Count_AllBooks_p()}}</span>)</option>
                  </a>       
                 
                 </li>
                </ul>
               </li>
              </div>
           </div>
         </div>
      </div>
    </div>          
<div class="col-sm-10" style="margin-top: 40px">
    <div class="items">
      <a href="{{url('books-cart')}}">
      <span class="notify-badge">@if(!Session::has('cart')) 0 @endif {{Session::has('cart') ? Session::get('cart')->totalQty : ''  }}</span>
          <img src="/designe/images/cart.png" width="200" height="150">
    </a>
  </div>
</div>     
         </div>
   </div>
  </div>
</div> 
    <div class="" >
    
        <div class="row justify-content-center" id="books" style="margin-left: 30px" >
          @foreach($books as $key => $book)
        <div class="views-row views-row-1 views-row-odd views-row-first  col-lg-4 col-md-6 mb-3">
            <div class="item">
              <div class="item-inner-item">
               <div class="views-field views-field-field-image-cache-fid">
                  <div class="field-content img">
                    @if(carbon\Carbon::now()->diffInDays($book->created_at) < 30)
                    <img class="newest-edition" src="/designe/images/nouveau.png">
                    @endif
                    <div class="tg-frontcover">
                      <a href="{{'/show_book/'.$book->titre.'/'.$book->sujet}}" data-id="{{ $book->id}}" class="view">
                        <img  src="{{asset('/images/'.$book->image)}}" title="" width="156" height="240" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}" >
                       </a>

                    </div>

                  </div>
                  </div>
                   <div class="tg-backcover row container">
                    <p class="bold">Titre : {{str_limit($book->titre,15)}}</p>
                    </div>
                  
              <div class="tg-backcover row container">
                <p class="bold">Auteur(s) : {{str_limit($book->auteur,15)}}</p>
              </div>
              <div class="tg-backcover row container">
                <p class="">Editeur(s) : {{str_limit($book->editeur,15)}}</p> 
              </div>
             <div class="tg-backcover row container">
                <p class="">EAN13 : {{str_limit($book->isbn,15)}}</p>
              </div> 
              <div class="tg-backcover row container">
                <p class="">Langue : {{$book->langue}}</p>
              </div> 
               <div class="tg-backcover row container">
                <p class="">prix : <span style="color: red;font-weight: bold">@if($book->prix == null) Gratuit @else {{$book->prix}}$ @endif</span></p>
              </div> 
               <div class="tg-backcover row container">
                <div class="col-md-5 justify-content-center">
                  <p class=""><i class="fa fa-download" aria-hidden="true"></i> {{$book->download_counter}}</p>
                </div>
                 <div class="col-md-5 justify-content-center">
                  <p class=""><i class="fa fa-eye" aria-hidden="true"></i> {{$book->view}}</p>
                </div>
               
              </div> 
              <div class="views-field views-field-addtocartlink">
                <div class="field-content">
                  <div class="add-to-cart">
                    @if($book->prix == null)
                    @if(Auth::check())
                     @if($book->adress_bib == null && $book->livre_pdf == null)
                      <a onclick="document.getElementById('vide').style.display='block'"  class="form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white">Télècharger
                   </a>
                    @elseif($book->livre_pdf == NULL)
                    <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{url($book->adress_bib)}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @else
                     <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @endif
                    @else
                    <a class="form-submit node-add-to-cart btn elevation-8dp text-center" onclick="document.getElementById('not_auth').style.display='block'" style="background-color: #f23a2e;width:150px;color: white" href="#">Télècharger</a>
                    @endif
                   @else
                   <a href="{{route('book.addToCarte',['id' => $book->id])}}" class="form-submit btn btn-success  node-add-to-cart btn elevation-8dp text-center" role="button" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ajouter au panier</a>
                    @endif
                  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach
        </div>
      </div>
       <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $books->links() }}
                        </ul>
                    </nav>
                </div>

    </div>

      @include('layouts.layout_auth')
   
       @include('layouts.layout_vide')

    <div class="col-12 text-center">
     
     </div>
     @endif
     </div>
@endsection
@section('footer')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
   $('#sujet').on('change',function(e){
               // console.log(e);
                var domaine = e.target.value;
                 alert(domaine);
                //ajax
               $.ajax({
      type: 'get',
       dataType: "html",

      url: '{{url('/books_sujet')}}',
      data: 'domaine=' + domaine,
      success:function(response){
       console.log(response);
//var json = JSON.parse(response);
    // alert(json.titre);
        $("#books").html(response);
      }
    });
              });
</script>
<script type="text/javascript">
$('.download').click(function(){
 $.ajax({
   url: "/update_download_count",
   type:"get",
   data: {
     id:   $(this).attr('data-id')
   },
   success: function (data) {
     console.log(data);
   },
   error: function (request, status, error) {
     console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
   }
 });
});
</script>
<script type="text/javascript">
$('.view').click(function(){
 $.ajax({
   url: "/update_view_count",
   type:"get",
   data: {
     id:   $(this).attr('data-id')
   },
   success: function (data) {
     console.log(data);
   },
   error: function (request, status, error) {
     console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
   }
 });
});
</script>
<!--script>
        $(document).on('change', '#sujet', function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                dataType: "json",
                url : '{{url('/books_sujet')}}',
                data : {
                    domaine : $('#sujet').val()
                },
                success:function(data){

                    $('#books').empty();
                    for (var i = 0; i < data.equipes.length; i++) {
                        $('#equipes').append('<tr><td>'+data.equipes[i].equipe_id+'</td></‌​tr>')
                    }

                },
                timeout:10000
            });

        });
    </script-->
@endsection