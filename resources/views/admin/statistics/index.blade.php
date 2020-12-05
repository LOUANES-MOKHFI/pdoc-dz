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
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="panel-heading">
                <h3 class="panel-title">Les Membres de Site {{getsetting()->site_name}}</h3>
              </div>
            <div class="panel panel-default row">
              <div class="card col-md-12 col-lg-12">
              <div class="panel-body">
                <div id="pie_chart" style="width: 100%;height: 400px">
                  
                </div>
              </div>
            </div>
              <div class="card col-md-12 col-lg-12">
              <div class="panel-body">
                <div class="texx-center">
                <div id="universite" style="width: 100%;height: 400px">
                  
                </div>
              </div>
            </div>



            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')
{!!Html::script('designe/plugins/chart.js/Chart.bundle.js')!!}
{!!Html::script('designe/plugins/chart.js/Chart.bundle.min.js')!!}
 <script type="text/javascript">
     var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Pourcentage des membres de site PDOC'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>

  <script type="text/javascript">
     var analytics1 = <?php echo $university; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart1);

   function drawChart1()
   {
    var data1 = google.visualization.arrayToDataTable(analytics1);
    var options1 = {
     title : 'Pourcentage des universites des membres de site PDOC'
    };
    var chart1 = new google.visualization.PieChart(document.getElementById('universite'));
    chart1.draw(data1, options1);
   }
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</script>
@endsection