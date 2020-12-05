@extends('layouts.app')

@section('title')
   Bibliographie Des Modules
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
        <span class="current">Bibliographie Des Modules</span>
      </div>
</div>
<div class="body">
<div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Ajouter Un Module</h2>
      </div>
    </div>
  </div>
<div class="site-section">
  <div class="container">
    <div class="text-center">
@if(session()->has('success'))
      <div class="alert alert-success" id="msg">
      {{ session()->get('success') }}
      <div>
        <a href="{{url('bibliographie-des-modules/module/'.$lastid.'/add-reference')}}" class="btn btn-info">Ajouter les réferences</a>
      </div>
      </div>
@elseif(session()->has('error'))
      <div class="alert alert-warning" id="msg">
      {{ session()->get('error') }}
      </div>
@endif

   <form method="POST" action="{{ url('/bibliographie-des-modules/add_module') }}" enctype='multipart/form-data'>
                        @csrf
                    <div class="row">
                       <div class="col-md-6 form-group">
                        <label for="universite">Type d'etablissment<span style="color: red"> *</span></label>
                           <select name="type_etablissement" class="form-control form-control-lg" required id="type_etablissement">
                            <option value="">--Type d'etablissement--</option>
                            @foreach(type_etablissement() as $type_etablissement)
                            <option value="{{$type_etablissement->type_etablissement}}">{{$type_etablissement->type_etablissement}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <select name="etablissement" class="form-control form-control-lg @error('etablissement') is-invalid @enderror" required id="etablissement">
                             <option value="">--Etablissement--</option>
                             
                          </select>

                        </div>
                         <div class="col-md-6 form-group">
                          <label for="type_etablissement">Module<span style="color: red"> *</span></label>
                          <input type="text" name="module" class="form-control form-control-lg" value="{{old('module')}}" required>
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label for="faculte">Faculte</label>
                            <input id="faculte" type="text" class="form-control form-control-lg @error('faculte') is-invalid @enderror" name="faculte" autocomplete="faculte" value="{{ old('faculte') }}">

                                @error('faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="specialite">Spécialite</label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="fichier">Le Fichier <span style="color: red"> *</span></label>
                            <input type="file" name="fichier" class="form-control form-control-lg"
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                          <input type="submit" name="valider" class="btn btn-primary btn-lg px-5" value="Ajouter">
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
@endsection
