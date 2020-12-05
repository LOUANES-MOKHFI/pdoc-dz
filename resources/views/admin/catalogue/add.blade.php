@extends('admin.layouts.layout')

@section('title')
    Ajouter Un Catalogue de biblitheque
@endsection

@section('header')
    <style type="text/css">
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter Un Catalogue de bibliotheque</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter un catalogue</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
  <div class="row">
    <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ajouter Un catalogue</h3>
            </div>
@include('admin.catalogue.form')

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
               }else{
                $('.autre').hide();
                $('.a').show();
                
               }
              });
            </script>

@endsection