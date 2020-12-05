@extends('admin.layouts.layout')

@section('title')
   Messages Non Lu
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
            <h1>Messages Non Lu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Messages Non Lu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dossier</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active" id="all_msg">
                  <a href="{{url('/admin/contact')}}" class="nav-link" >
                    <i class="fas fa-inbox"></i> Boit de réception
                    <span class="badge bg-primary float-right">{{count(All_message())}}</span>
                  </a>
                </li>
                <li class="nav-item" id="read_msg">
                  <a href="{{url('/admin/contact/message/message_lu')}}" class="nav-link" >
                    <i class="far fa-file-alt"></i> Message Lu
                    <span class="badge bg-warning float-right">{{countreadMessage()}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/admin/contact/message/message_non_lu')}}" class="nav-link" id="unread_msg">
                    <i class="fas fa-filter"></i> Message Non Lu
                    <span class="badge bg-warning float-right">{{countunreadMessage()}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/admin/contact/message/corbeille')}}" class="nav-link" id="deleted_msg">
                    <i class="far fa-trash-alt"></i> Corbeille
                    <span class="badge bg-danger float-right">{{count(deleted_message())}}</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9 a" id="tout_msg">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Messages Non Lu</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach(unreadMessage() as $message)
                  <tr>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="{{'/admin/contact/'.$message->id}}">{{$message->name}}</a></td>
                    <td class="mailbox-subject"><b>{{$message->subject}}</b> - {{str_limit($message->message)}}
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{$message->created_at}}</td>
                    <td><a href="{{'/admin/contact/'.$message->id.'/delete'}}" class=" btn far fa-trash-alt"></a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                </div>
                <!-- /.btn-group -->
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
  </div>
@endsection

@section('footer')

@endsection
