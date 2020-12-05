@extends('layouts.app')

@section('title')
    Catalogue des Bibliothéques
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
  .error{
        outline: 1px solid #f00;
      }
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

</style>

@endsection
@section('content')
<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"> Catalogue des Bibliothéques </span>
      </div>
</div>
<div class="body">
<div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Ajouter Votre Catalogue</h2>
      </div>
    </div>
  </div>
<div class="site-section">
  <div class="container">
    <div class="text-center">
      @include('layouts.flash_msg')
      
   <form method="POST" action="{{ url('/add-catalogue') }}">
                        @csrf
                    <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <input type="text" name="etablissement" class="form-control-lg form-control" required value="{{old('etablissement')}}">
                             
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="structure">Structure<span style="color: red"> *</span></label>
                            <input id="structure" type="text" class="form-control form-control-lg @error('structure') is-invalid @enderror" name="structure" value="{{ old('structure') }}" required autocomplete="structure">

                                @error('structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Url de catalogue<span style="color: red"> *</span></label>
                            <input id="url" type="text" class="form-control form-control-lg @error('url') is-invalid @enderror" name="url" required autocomplete="url" value="{{ old('url') }}">

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="thematique">Thématique<span style="color: red"> *</span></label>
                            <input id="thematique" type="text" class="form-control form-control-lg @error('thematique') is-invalid @enderror" name="thematique" value="{{ old('thematique') }}" required autocomplete="thematique" autofocus>

                                @error('thematique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="thematique">Catalogue<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="nationalite_catalogue" required> 
                                <option value="">--Catalogue--</option>
                                <option value="algerienne">Algerien</option>
                                <option value="etrangere">Etrangér</option>
                            </select>

                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Ajouter') }}
                                </button>
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
<script type="text/javascript">
       $('#type_etablissement').on('change',function(e){
                console.log(e);
                var type = e.target.value;
               if(type == "autre"){
                $('.a').hide();
                $('.autre').show();
               }else{
                $('.a').show();
                $('.autre').hide();


               }
              });
            </script>
@endsection
