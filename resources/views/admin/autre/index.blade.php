@extends('admin.layouts.layout')

@section('title')
    Liste Des autres persons
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
            <h1>Liste Des autres persons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste Des autres persons</li>
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
              <h3 class="card-title col-2">Liste Des autres persons</h3>
              <form class="card card-sm col-7" action="{{url('/search_autre')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nom de person.." name="name">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/autre/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un autre person</a>
             </div>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom et Prenom</th>
                  <th>Email</th>
                  <th>domaine</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($user as $user1)
                  @if($user1->genre == 'autre')
                <tr>
                  <td>{{$user1->name}}</td>
                  <td>{{$user1->email}}</td>
                  <td>{{$user1->specialite}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/autre/'.$user1->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/autre/'.$user1->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                       @if($user1->id != 1)
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/autre/'.$user1->id.'/delete'}}"></a>
                       @endif 
                  </td>
                </tr>
                @endif
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom et Prenom</th>
                  <th>Email</th>
                  <th>Domiane</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$user->links()}}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')

    
@endsection