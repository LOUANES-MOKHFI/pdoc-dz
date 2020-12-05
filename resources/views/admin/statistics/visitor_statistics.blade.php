@extends('admin.layouts.layout')

@section('title')
    Les statistics
@endsection

@section('header')
{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css') !!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
{!! Html::style('/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/designe/dist/css/adminlte.min.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les statistics</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">statistics</li>
            </ol>
          </div>
        </div>
        <div class="row">
             <div class="col-md-3 col-lg-3">
               <a href="{{url('/ressource/statistics')}}" class="btn btn-info" style="width: 220px">les statistics des Ressources</a>
               
             </div>
              <div class="col-md-3 col-lg-3">
               
                <a href="{{url('/visitor/statistics')}}" class="btn btn-info" style="width: 220px">les statistics des visiteurs</a>
             </div>
          </div>
      </div>
    </section>
 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <div class="panel panel-default">
                <div class="panel-heading">Chart Demo</div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
            </div>

{!! Charts::scripts() !!}
{!! $chart->script() !!}
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                          <h5>Liste des visiteurs : {{count_all_visitor()}}</h5>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Adress IP</th>
                  <th>Date</th>
                  <th>Heurs</th>
                </tr>
                </thead>
                <tbody>
                  @foreach(all_visiteur() as $user1)
                <tr>
                  <td>{{$user1->ip}}</td>
                  <td>{{$user1->date}}</td>
                  <td>{{$user1->heur}}</td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Adress IP</th>
                  <th>Date</th>
                  <th>Heurs</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{all_visiteur()->links()}}
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
   
  </div>
@endsection

@section('footer')
{!!Html::script('designe/plugins/chart.js/Chart.bundle.js')!!}
{!!Html::script('designe/plugins/chart.js/Chart.bundle.min.js')!!}
<script type="text/javascript">
  
</script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


@endsection