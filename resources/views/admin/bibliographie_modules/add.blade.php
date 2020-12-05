@extends('admin.layouts.layout')

@section('title')
Bibliographies des modules
@endsection

@section('header')
{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css') !!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
{!! Html::style('/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/designe/dist/css/adminlte.min.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bibliographies des modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Bibliographies des modules</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
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
        <a href="{{url('bibliographie-modules/module/'.$lastid.'/add-reference')}}" class="btn btn-info">Ajouter les réferences</a>
      </div>
      </div>
@elseif(session()->has('error'))
      <div class="alert alert-warning" id="msg">
      {{ session()->get('error') }}
      </div>
@endif

   <form method="POST" action="{{ url('/bibliographie-modules') }}" enctype='multipart/form-data'>
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
