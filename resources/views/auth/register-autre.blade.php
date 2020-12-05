@extends('layouts.app')

@section('title')
 Iscription
@endsection
@section('header')
<style type="text/css">
   .body {
  font-family: "Poppins", sans-serif;
  background:#F0F8FF;
  margin-bottom: 0px;
}
 h2.mb-0{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
    font-weight: bold;
  }
  .button-primary{
    font-weight: bold;
    font-size: 17px;
  }
</style>
@endsection
@section('content')    
<div class="body">
    <div class="site-section" style="margin-top: 50px">
        <div class="container">
            <div class="row justify-content-center">
            
                       <div class="container" style="margin-bottom: 20px">
                    <div class="align-items-center">
                      <div class="col-lg-12 text-center">
                        <h2 class="mb-0">INSCRIPTION AUTRE UTILISATEUR</h2>
                      </div>
                    </div>
                  </div>
                      @include('layouts.flash_msg')

<form method="POST" action="{{ url('register') }}" style="margin-bottom: 20px">
                        @csrf
                <div class="">
                      <div class="row">
                      <input type="hidden" name="genre" value="autre">

                        <div class="col-md-6 form-group">
                            <label for="username">Nom et Prénom</label>
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword">Mot de passe</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword2">Confirmer votre mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" autocomplete="new-password">
                        </div>
                        <div class="col-md-6 form-group  @error('genre') is-invalid @enderror">
                           @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                      
                     </div>

                     
                    <div class="row">
                     
                         <div class="col-md-12 form-group">
                            <label for="etablissement">Etablissement<span style="color: red"> *</span></label>
                            <input type="text" name="universite" class="form-control form-control-lg  @error('universite') is-invalid @enderror">
                              @error('universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="grade">Grade<span style="color: red"> *</span></label>
                            <input type="text" name="grade" class="form-control form-control-lg  @error('grade') is-invalid @enderror">
                              @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="specialite">Domaine<span style="color: red"> *</span></label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" autocomplete="specialite" autofocus >

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
               
                    <div class="row justify-content-center">
                            
                           <a href="#" onclick="document.getElementById('layout_abonnement').style.display='block'" type="submit" class="btn btn-primary btn-lg  button-primary" style="color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 40%;">Inscrire avec abonement</a>
                            
                                 <a href="#" onclick="document.getElementById('layout_confirmation').style.display='block'" type="submit" class="btn btn-primary btn-lg  button-primary" style="color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 40%;">Inscrire gratuitement</a>
                                    @include('layouts.layout_confirmation')
                                    @include('layouts.layout_abonnement')

                    </div>
            </form>
        </div>          
    </div>
</div>
    </div>
@endsection
@section('footer')

             <script type="text/javascript">
  $('#type_etablissement').on('change',function(e){
                console.log(e);
                var type_etablissement = e.target.value;

                //ajax
                $.get('/ajax-etablissement?type_etablissement=' + type_etablissement,function(data){
                    $('#etablissement').empty();
                   $.each(data, function(docuemnt,etablissement){
                     // alert(faculte.id);
                      $('#etablissement').append('<option value="' +etablissement.nom_etablissement+'">'+ etablissement.nom_etablissement+'</option>');
                   });
                });
              });
</script>

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection