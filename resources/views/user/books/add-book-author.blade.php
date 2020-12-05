@extends('layouts.app')

@section('title')
  Ajouter un Livre
@endsection
@section('header')
 

<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css">

<style type="text/css">
  h2.mb-0{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
    font-weight: bold;
  }
  .btn-primary{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
   border-radius: 30px
}
.body {
  font-family: "Poppins", sans-serif;
  background:#F0F8FF;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 20px
}

.card1 {
    border-bottom-left-radius: 20px;
    border-top-left-radius: 20px;
    background-color: #512DA8;
    height: 100%;
    color: #fff;
    padding-left: 13%;
    padding-right: 13%
}

.logo {
    margin-top: 30px;
    margin-left: 15px;
    cursor: pointer
}

.card2 {
    border-bottom-right-radius: 20px;
    border-top-right-radius: 20px
}
.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}

.or {
    width: 10%
}

.text-sm {
    font-size: 14px !important
}

input {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 10px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #512DA8;
    outline-width: 0
}

::placeholder {
    color: #EEEEEE;
    opacity: 1
}

:-ms-input-placeholder {
    color: #EEEEEE
}

::-ms-input-placeholder {
    color: #EEEEEE
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-blue {
    background-color: #512DA8;
    width: 100%;
    color: #fff;
    border-radius: 6px
}

.btn-blue:hover {
    background-color: #311B92;
    color: #fff;
    cursor: pointer
}

.card-0 {
    color: #311B92;
    border-radius: 20px;
    min-height: 352px;
    margin-top: 80px;
    padding: 30px
}

.carousel-indicators {
    position: absolute;
    bottom: -100px;
    display: -webkit-box !important
}


.content {
    color: #000;
    font-size: 14px
}

.social {
    margin-top: 150px
}

@media screen and (max-width: 991px) {
    .card1 {
        border-bottom-left-radius: 0px;
        border-top-right-radius: 20px
    }

    .card2 {
        border-bottom-left-radius: 20px;
        border-top-right-radius: 0px
    }
}
h6{
  font-weight: bold;
}
#ar{display: none}

.optionbox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-20%, -20%)
}

.optionbox select {
    background: #E91E63;
    color: #fff;
    padding: 10px;
    width: 250px;
    height: 50px;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 48px rgb(93, 15, 9);
    -webkit-appearance: button;
    outline: none
}

.optionbox:before {
    content: '\f358';
    font-family: "Font Awesome 5 free";
    position: absolute;
    top: 0;
    right: 0;
    height: 50px;
    width: 50px;
    background: #E91E63;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    pointer-events: none
}

.optionbox:hover:before {
    background: #c72059
}
</style>

@endsection
@section('content')
<div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
    <div class="container div">
      <a href="{{url('home')}}">Accueil</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">Ajouter un Livre</span>
    </div>
</div>
 <div class="body">
   <div class="container col-lg-5" style="float: right;">
   <div class="optionbox">
    <select name="langue" id="langue">
      <option value="">--Langue--</option>
      <option value="arabe">Arabe</option>
      <option value="etrangere">Etrangére</option>
    </select> </div>
       
   </div>
  <div class="container-fluid px-2 px-md-4 py-5 mx-auto">

    <div class="card card0 border-0">
        <div class="row d-flex">
                     <div class="col-lg-4">
                <div class="card1 pb-5">
                    <div class="row px-3">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" id="li1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" id="li2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" id="li3" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                
                                
                                <div class="carousel-item active card border-0 card-0">
                                    <div class="text-center"> <img height="550px" src="/designe/images/image1.jpeg" class="img-fluid profile-pic"> </div>
                                    <h6 class="font-weight-bold mt-5"></h6> <small class="mb-2"></small>
                                    <hr width="50%">
                                    <p class="content mt-2 mb-0"></p>
                                </div>
                                <div class="carousel-item card border-0 card-0">
                                    <div class="text-center"> <img height="550px" src="/designe/images/book1.jpg" class="img-fluid profile-pic"> </div>
                                    <h6 class="font-weight-bold mt-5"></h6> <small class="mb-2"></small>
                                    <hr width="50%">
                                    <p class="content mt-2 mb-0"></p>
                                </div>
                                <div class="carousel-item card border-0 card-0">
                                    <div class="text-center"> <img height="550px" src="/designe/images/bookimage.jpg" class="img-fluid profile-pic"> </div>
                                    <h6 class="font-weight-bold mt-5"></h6> <small class="mb-2"></small>
                                    <hr width="50%">
                                    <p class="content mt-2 mb-0"></p>
                                </div>
                            </div>
                        </div>
                  
                </div>
            </div>
          </div>
    
            <div class="col-lg-8 a" id="fr">
              <form method="POST" action="{{ url('store-book-author') }}" enctype='multipart/form-data'>
                @csrf
              @if(session()->has('success'))
                    <div class="alert alert-success" id="msg">
                    {{ session()->get('success') }}
                    </div>
              @elseif(session()->has('error'))
                    <div class="alert alert-warning" id="msg">
                    {{ session()->get('error') }}
                    </div>
              @endif
                <div class="card2 card border-0 px-4 px-sm-5 py-5"> 
                    <h3 class="mb-1">Ajouter Votre livre</h3>
                    <p class="mb-4 text-sm"></p>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Titre de livre</h6>
                            </label> <input type="text" name="titre" placeholder="Titre" value="{{old('titre')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Auteur</h6>
                            </label> <input type="text" name="auteur" placeholder="Auteur" value="{{old('auteur')}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Editeur</h6>
                            </label> <input type="text" name="editeur" placeholder="Editeur" value="{{old('editeur')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Langue</h6>
                            </label>
                            <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="">--Langue--</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select> </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Pays d’edition</h6>
                            </label> <input type="text" name="pays_edition" placeholder="Pays " value="{{old('pays_edition')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Date d’edition </h6>
                            </label>
                            <input type="text" name="date_edition" placeholder="Date d'edition" value="{{old('date_edition')}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Nombre de pages</h6>
                            </label> <input type="text" name="nbr_page" placeholder="nombre de page" value="{{old('nbr_page')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Format</h6>
                            </label>
                            <input type="text" name="format" placeholder="Format" value="{{old('format')}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ISBN 10</h6>
                            </label> <input type="text" name="isbn10" placeholder="ISBN10" value="{{old('isbn10')}}"> </div>
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ISBN 13</h6>
                            </label>
                            <input type="text" name="isbn13" placeholder="ISBN13" value="{{old('isbn13')}}">
                        </div>
                        <div class="col-md-4"><label class="mb-0">
                                <h6 class="mb-0 text-sm">EAN</h6>
                            </label>
                            <input type="text" name="isbn" placeholder="EAN" value="{{old('EAN')}}">
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Mots clés</h6>
                            </label> <input type="text" name="mot_cle" placeholder="Mots clés" value="{{old('mot_cle')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Domaine</h6>
                            </label>
                            <input type="text" name="sujet" placeholder="Domaine" value="{{old('domaine')}}" required>
                        </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                           @if(session()->has('resume'))
                            <div class="alert alert-warning" id="msg">
                            {{ session()->get('resume') }}
                            </div>
                            @endif
                            <label class="mb-0">
                                <h6 class="mb-0 text-sm">Résumé</h6>
                            </label> 
                            <textarea class="form-control" type="text" name="resume" placeholder="Résumé" required>{{old('resume')}} </textarea>
                          </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Sommaire</h6>
                            </label>
                            <input type="file" name="sommaire" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                           </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Image de livre</h6>
                            </label>
                            <input type="file" name="image" class="form-control form-control-lg" id="pdf"   
                            required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Fichier de livre</h6>
                            </label>
                            <input type="file" name="livre_pdf" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                        </div>
                         <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">prix de feuilletage</h6>
                            </label>
                            <input type="text" name="prix_f" class="form-control form-control-lg" id="prix" required placeholder="20.00$" >
                        </div>
                         <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">prix de téléchargement</h6>
                            </label>
                            <input type="text" name="prix" class="form-control form-control-lg" id="prix" required placeholder="20.00$" >
                        </div>
                    </div>
                    <div class="row px-3 mb-3"> </div>
                    <div class="row mb-4">
                        <div class="col-md-6"> <button class="btn btn-blue text-center mb-1 py-2">Ajouter</button> </div>
                    </div>
                </div>
              </form>
            </div>


             <div class="col-lg-8 a" id="ar">
              <form method="POST" action="{{ url('store-book-author') }}" enctype='multipart/form-data'>
                @csrf
              @if(session()->has('success'))
                    <div class="alert alert-success" id="msg">
                    {{ session()->get('success') }}
                    </div>
              @elseif(session()->has('error'))
                    <div class="alert alert-warning" id="msg">
                    {{ session()->get('error') }}
                    </div>
              @endif
                <div class="card2 card border-0 px-4 px-sm-5 py-5  text-right"> 
                    <h3 class="mb-1" style="float: right;">أنشر كتابك</h3>
                    <p class="mb-4 text-sm"></p>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">العنوان </h6>
                            </label> <input type="text" name="titre" placeholder="العنوان " value="{{old('titre')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">الناشر</h6>
                            </label> <input type="text" name="auteur" placeholder="المؤلف" value="{{old('auteur')}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">المؤلف</h6>
                            </label> <input type="text" name="editeur" placeholder="الناشر" value="{{old('editeur')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">لغة الكتاب</h6>
                            </label>
                            <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="">-- لغة الكتاب --</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select> </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">بلد النشر</h6>
                            </label> <input type="text" name="pays_edition" placeholder="بلد النشر " value="{{old('pays_edition')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">تاريخ النشر </h6>
                            </label>
                            <input type="text" name="date_edition" placeholder="تاريخ النشر" value="{{old('date_edition')}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">عدد الصفحات</h6>
                            </label> <input type="text" name="nbr_page" placeholder="عدد الصفحات" value="{{old('nbr_page')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">القياس</h6>
                            </label>
                            <input type="text" name="format" placeholder="القياس" value="{{old('format')}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ردمك 10</h6>
                            </label> <input type="text" name="isbn10" placeholder="ردمك 10" value="{{old('isbn10')}}"> </div>
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ردمك 13 </h6>
                            </label>
                            <input type="text" name="isbn13" placeholder="ردمك 13 " value="{{old('isbn13')}}">
                        </div>
                        <div class="col-md-4"><label class="mb-0">
                                <h6 class="mb-0 text-sm">الرقم التجاري </h6>
                            </label>
                            <input type="text" name="isbn" placeholder="الرقم التجاري " value="{{old('EAN')}}">
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">الكلمات المفتاحية </h6>
                            </label> <input type="text" name="mot_cle" placeholder="الكلمات المفتاحية " value="{{old('mot_cle')}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">لتخصص</h6>
                            </label>
                            <input type="text" name="sujet" placeholder="لتخصص" value="{{old('domaine')}}" required>
                        </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                           @if(session()->has('resume'))
                            <div class="alert alert-warning" id="msg">
                            {{ session()->get('resume') }}
                            </div>
                            @endif
                            <label class="mb-0">
                                <h6 class="mb-0 text-sm">الملخص </h6>
                            </label> 
                            <textarea class="form-control" type="text" name="resume" placeholder="الملخص " required>{{old('resume')}} </textarea>
                          </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">الفهرس</h6>
                            </label>
                            <input type="file" name="sommaire" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                           </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">صورة الكتاب</h6>
                            </label>
                            <input type="file" name="image" class="form-control form-control-lg" id="pdf"   
                            required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">الكتاب</h6>
                            </label>
                            <input type="file" name="livre_pdf" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                        </div>
                         <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">سعر التصفح </h6>
                            </label>
                            <input type="text" name="prix_f" class="form-control form-control-lg" id="prix" required placeholder="20.00$" >
                        </div>
                        <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">سعر التحميل</h6>
                            </label>
                            <input type="text" name="prix" class="form-control form-control-lg" id="prix" required placeholder="20.00$" >
                        </div>
                    </div>
                    <div class="row px-3 mb-3"> </div>
                    <div class="row mb-4">
                        <div class="col-md-6"> <button class="btn btn-blue text-center mb-1 py-2">Ajouter</button> </div>
                    </div>
                </div>
              </form>
            </div>

        </div>
    </div>
</div>


@endsection
@section('footer')
<script type="text/javascript">
  $('#langue').on('change',function(e){
                console.log(e);
                var langue = e.target.value;
                if(langue == 'arabe')
                {
                $('.a').hide();
                $('#ar').show();
                 }
              else if(langue == 'etrangere')
              {
                $('.a').hide();
                $('#fr').show();
              }
              });
</script>
@endsection



