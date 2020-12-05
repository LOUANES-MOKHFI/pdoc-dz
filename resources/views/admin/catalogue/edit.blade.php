@extends('admin.layouts.layout')

@section('title')
  Modifier Un catalogue
@endsection

@section('header')
    <style type="text/css">
    </style>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier Un catalogue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Un catalogue</li>
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
            <div class="card-header">
              <h3 class="card-title">Modifier le catalogue de <b>{{$catalogue->etablissement}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/catalogue/'.$catalogue->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')

                 <div class="row">
                         <div class="col-md-12 form-group">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <input type="text" name="etablissement" class="form-control-lg form-control" required value="{{ $catalogue->etablissement }}">
                             
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="structure">Structure<span style="color: red"> *</span></label>
                            <input id="structure" type="text" class="form-control form-control-lg @error('structure') is-invalid @enderror" name="structure" value="{{ $catalogue->structure }}" required autocomplete="structure">

                                @error('structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Url de catalogue<span style="color: red"> *</span></label>
                            <input id="url" type="text" class="form-control form-control-lg @error('url') is-invalid @enderror" name="url" required autocomplete="url" value="{{$catalogue->url}}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="thematique">Thématique<span style="color: red"> *</span></label>
                            <input id="thematique" type="text" class="form-control form-control-lg @error('thematique') is-invalid @enderror" name="thematique" value="{{$catalogue->thematique}}" required autocomplete="thematique" autofocus>

                                @error('thematique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="thematique">Catalogue<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="nationalite_catalogue">
                                <option>{{$catalogue->nationalite_catalogue}}</option>
                                <option value="algerienne">Algerienne</option>
                                <option value="etrangere">Etrangére</option>
                            </select>

                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning fa fa-btn fa-edit btn-lg px-5">
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                    </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
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
               }
               else{
                $('.autre').hide();
                 $('.a').show();
               }
              });
            </script>
@endsection