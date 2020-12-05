@extends('admin.layouts.layout')

@section('title')
    Ajouter Un Livre
@endsection

@section('header')
    <style type="text/css">
      .a{
        display: none;
      }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter Un Livre</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter un Livre</li>
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
              <h3 class="card-title">Ajouter Un Livre</h3>
            </div>
@include('admin.books.form')

    </div>
  </div>
</div>
</section>
</div>


@endsection

@section('footer')
    <script type="text/javascript">
       $('#check1').on('change',function(e){
                console.log(e);
                var module = e.target.value;
               // alert(module);
                $('.a').hide();
                $('.b').show();
                $('#enseignant').show();

              });

    </script>
@endsection