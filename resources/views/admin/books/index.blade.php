@extends('admin.layouts.layout')

@section('title')
    Liste Des Livres
@endsection

@section('header')

{!! Html::style('/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste Des Livres</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste Des Livres</li>
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
              <h3 class="card-title col-2">Liste des Livres</h3>
              <form class="card card-sm col-7" action="{{url('/search_book')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Titre de livre.." name="book">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/admin/books/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un Livre</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titre de livre</th>
                  <th>Auteur</th>
                  <th>Langue</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($books as $book)
                <tr>
                  <td width="390px">{{$book->titre}}</td>
                  <td width="360px">{{$book->auteur}}</td>
                  <td>{{$book->langue}}</td>
                  <td>
                   <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/books/'.$book->id}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/books/'.$book->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                  <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/books/'.$book->id.'/delete'}}"></a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Titre de livre</th>
                  <th>Auteur</th>
                  <th>Langue</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              {{$books->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')
  {!! Html::script('/designe/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}

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