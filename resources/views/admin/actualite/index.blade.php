@extends('admin.layouts.layout')

@section('title')
    Liste Des Actualités
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
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste des Actualités</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Actualités</li>
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
              <h3 class="card-title">Liste des Actualités</h3>
              <a href="{{url('/admin/actualites/create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Ajouter une Actualité</a>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titre de l'actualite</th>
                  <th>Lien</th>
                  <th>Nouveauté</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($actualite as $actualite1)
                <tr>
                  <td>{{$actualite1->id}}</td>
                  <td>{{$actualite1->titre}}</td>
                  <td>{{$actualite1->lien}}</td>
                  <td>{{ $actualite1->nouveaute==1? 'Active':'Desactive' }}</td>
                  <td>
                   <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/actualites'}}/{{\Crypt::encrypt($actualite1->id)}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/actualites'}}/{{\Crypt::encrypt($actualite1->id)}}/{{'edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                  <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/actualites/'.$actualite1->id.'/delete'}}"></a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Titre</th>
                  <th>Lien</th>
                  <th>Etat</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')
  {!! Html::script('/designe/plugins/jquery/jquery.min.js') !!}
  {!! Html::script('/designe/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
  {!! Html::script('/designe/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}
  {!! Html::script('/designe/dist/js/adminlte.min.js') !!}
  {!! Html::script('/designe/dist/js/demo.js') !!}

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
@endsection