@extends('layouts.app')

@section('title')
  
  Panier des livres
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
.propos{
  display: none;
}
.media-heading a{
  color: #343a40;
  font-size: 15px;
;
}
</style>
@endsection
@section('content')
    <div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Livres</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Panier</span>
      </div>
      </div>
    </div>
  @if(Session::has('cart'))
  <div class="container text-center">
        @include('layouts.flash_msg')
</div>
  @if(empty($books))
  <div class="container">

    <div class="row">
        <div class="col-sm-12 col-md-12 col-md-offset-1">
            <table class="table card text-center" style="margin-top: 20px">
                <tbody >
                  <tr>
                    <td class="col-sm-9 col-md-7" align="center" colspan="4" style="color: #343a40;font-size: 20px">Le panier est vide</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
                  @else

     <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                           <td></td>
                        <th>Quantitie</th>
                        <th class="text-center">Prix</th>

                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                   
                   @foreach($books as $book)
                
                    <tr>
                        <td class="col-sm-9 col-md-7">
                          <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{asset('/images/'.getBook($book['item']['id'])->image)}}" style="width: 72px; height: 72px;"> </a>
                              <div class="media-body">
                                  <h4 class="media-heading"><a href="{{'/show_book/'.$book['item']['titre'].'/'.$book['item']['sujet']}}">&nbsp;&nbsp; {{$book['item']['titre']}}</a></h4>
                              </div>
                          </div>
                        </td>
                           <td></td>
                        <td class="col-sm-2 col-md-2" style="text-align: center">
                        <p style="font-size: 17px;font-weight: bold">{{$book['qty']}}</p>
                        </td>
                        <td class="col-sm-2 col-md-2 text-center">
                        <strong>

                         
                             {{$book['price']}} $
                          
                        </strong></td>
                        <td class="col-sm-2 col-md-2">
                        <a type="button" class="btn btn-danger" href="{{route('book.remove',['id' => $book['item']['id']]) }}">
                            <span class="fa fa-trash"></span> 
                        </a>
                      </td>
                    </tr>
                   @endforeach
                   
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>

                      <td>{{$totalprix}} $</td>
                   </tr>
                       <tr>
                        <td>
                          @if(Auth::check())
                        <a href="{{url('checkout')}}" class="btn btn-success">
                            Passer la commande <span class="glyphicon glyphicon-play"></span>
                        </a>
                      @else
                      <a class="btn btn-success" href="{{route('login')}}">Passer la commande</a>
                         @endif
                      </td>
                        <td>   </td>
                        <td>
                          <!--a href="{{'/books'}}" class="btn btn-success">&nbsp;Actualiser le panier</a-->
                        </td>
                        <td>
                        <a href="{{'/books'}}" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Continue le shopping</a>
                      </td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
      @include('layouts.layout_login')

  @else
          <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-md-offset-1">
            <table class="table card text-center" style="margin-top: 20px">
                <tbody >
                  <tr>
                    <td class="col-sm-9 col-md-7" align="center" colspan="4" style="color: #343a40;font-size: 20px">Le panier est vide</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

  @endif
@endsection
@section('footer')


@endsection