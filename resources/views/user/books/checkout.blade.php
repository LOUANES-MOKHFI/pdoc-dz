@extends('layouts.app')

@section('title')
  
  Payement des livres
@endsection
@section('header')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">

* {
    margin: 0;
    padding: 0
}
.body {
 background:#F0F8FF;}
.card0 {
    margin: 50px 12px 40px 12px;
    border: 0
}
.card1 {
    margin: 0;
    padding: 0;
    object-fit: contain;
    height: 100%;
    background-color: #EDE7F6;
    position: relative;
    border-top-left-radius: 10px !important;
    border-bottom-left-radius: 10px !important
}
#sub-heading1 {
    font-size: 55px
}
#sub-heading2 {
    font-size: 20px;
    color: grey
}
.gift-input {
    background: none
}

#heading {
    font-size: 25px;
    color: #000000;
    padding-bottom: 20px
}
.placeicon {
    font-family: fontawesome !important
}
.card2 {
    padding: 25px;
    padding-left: 35px;
    padding-right: 35px;
    margin: 0;
    height: 100%;
    border-top-right-radius: 10px !important;
    border-bottom-right-radius: 10px !important
}
.text-dark {
    color: grey !important
}
.form-card {
    height: 100%;
    position: relative
}
.form-card input,
.form-card textarea {
    padding: 5px 1px 10px 1px;
    border: none;
    border-bottom: 1px solid lightgrey;
    border-radius: 0px;
    margin-bottom: 19px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 17px;
    font-weight: bold;
    letter-spacing: 1px
}
.form-card input:focus,
.form-card textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 1.5px solid skyblue;
    padding-bottom: 9.5px;
    outline-width: 0
}
.form-card .btn-success {
    color: #ffffff !important;
    margin-bottom: 25px !important;
    font-weight: 300;
    width: 100%;
    border-radius: 4px;
    letter-spacing: 2px;
    font-family: Trebuchet MS !important
}
.bottom {
    bottom: 0;
    position: absolute;
    width: 100%
}
@media (max-width: 768px) {
    .bottom {
        position: relative
    }
    .card1 {
        padding-right: 15px;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important
    }
    .card2 {
        border-bottom-left-radius: 10px !important;
        border-bottom-right-radius: 10px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important
    }
}
.fit-image {
    width: 100%;
    object-fit: cover
}
.radio-group {
    position: relative;
    margin-bottom: 20px
}
.radio {
    display: inline-block;
    width: 204;
    height: 64;
    border-radius: 0;
    background: #B2EBF2;
    box-sizing: border-box;
    border-top: 3px solid #E8F5E9;
    cursor: pointer;
    margin: 8px 0px 8px 0px;
    transition: 0.3s
}
.radio:hover {
    border-top: 3px #B2EBF2 solid;
    transition: 0.3s
}
.radio.selected {
    border-top: 3px solid #0091EA;
    transition: 0.3s
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
     <span class="current">Payement</span>
  </div>
</div>
<div class="body">
<div class="container-fluid">
    @if(Session::get('error'))
    <div id="charge-error" class="text-center alert alert-danger {{!Session::has('error')? 'hidden': ''}}">
        {{Session::get('error')}}
    </div>
    @endif
  <form method="post" action="{{url('checkout')}}" id="checkout-form">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
            <div class="card card0" >
                <div class="row">
                    <div class="col-md-6 d-block p-0 box">
                        <div class="card rounded-0 border-0 card1 pr-xl-4 pr-lg-3">
                            <div class="row justify-content-center">
                                <div class="col-11">
                                    <h3 class="text-center mt-4 mb-4" id="heading0">Plate-forme Documentaire</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-5 fit-image"> <img src="{{asset('/images/'.getsetting()->logo)}}" height="200px" width="250px"> </div>
                            </div>
                            <div class="row justify-content-center">
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-11">
                                    <p class="text-center mt-0 mb-3" id="sub-heading2">Information personnel</p>
                                </div>
                            </div>
                            <div class="form-card p-4 pl-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-12"> <label class="gift">Nom et prénom</label> </div>
                                            <div class="col-12">
                                              <input class="gift-input" type="text" name="name" placeholder="Mark" required> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"> <label class="gift">email</label><br> <input class="gift-input" type="email" name="email" placeholder="mark@mail.org" > </div>
                                </div>
                                 <div class="row">
                                    <div class="col-12"> <label class="gift">Adress</label><br> <input class="gift-input" type="text" name="address" required> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 p-0 box">
                        <div class="card rounded-0 border-0 card2">
                            <div class="form-card">
                                <h2 id="heading" class="text-center"> Information de payement</h2>
                                <div class="radio-group text-center">
                                    <div class='radio selected' data-value="credit">
                                      <img src="https://i.imgur.com/28akQFX.jpg" width="300px" height="60px"></div>
                                     <br>
                                </div>
                                <h3 id="credit" class="mb-3">Card de credit</h3> <input type="text" id="card-name" name="cardname" placeholder="John Smith" required>
                                <div class="row">
                                    <div class="col-12">
                                      <label> Numéro de la carte</label>
                                      <input type="text" name="card-number" id="card-number" placeholder="0000 0000 0000 0000"  maxlength="16" required> </div>
                                </div>
                                <div class="row form-group">
                                  <div class="row">
                                    <div class="col-3 col-md-5">
                                      <label>Moi d'expiration</label>
                                      <select name="card-expiry-month" id="card-expiry-month" class="placeicon form-control" required>
                                        <option value="">Moi</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                      </select>
                                    </div>
                                    <div class="col-3 col-md-5">
                                     <label>Année d'expiration</label>
                                     <input type="text" name="card-expiry-year" id="card-expiry-year" placeholder="YY" class="placeicon"  required> </div>
                                </div></div>
                                 <div class="row">
                                    <div class="col-12">
                                     <label> CVC</label>
                                     <input type="password" name="card-cvc" id="card-cvc" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3" required>
                                      </div>
                                </div>
                                {{csrf_field()}}
                                <!--div class="row form-group">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="check" class="custom-control-input"> <label for="chk1" class="custom-control-label">Business account</label> </div>
                                    </div>
                                </div-->
                                <div class="" >
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h4 id="total" class="text-center">Total: ${{$total}}</h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                         <input name="submit" type="submit" value="ACHETER MAINTENANT" class="btn btn-success"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>
</div>
</div>
@endsection
@section('footer')

<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript" src="{{ URL::to('/designe/js/checkout.js') }}">
    
</script>
@endsection