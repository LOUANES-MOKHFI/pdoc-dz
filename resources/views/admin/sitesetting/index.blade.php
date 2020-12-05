@extends('admin.layouts.layout')

@section('title')
   Parametre de site
@endsection

@section('header')
    
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parametre de site</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Parametre de site</li>
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
              <h3 class="card-title">Parametre de site</h3>
            </div>
 <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  Parametre Génèrale
                </h3>
              </div>
              <div class="card-body">
       <div class="col-xs-12 col-lg-12 col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Modifier les Parametres de site</h3>
          </div><br>
          <form action="{{ url('/admin/sitesetting/'.$sitesetting->id)}}" method="post" enctype='multipart/form-data'>
            {{ csrf_field()}}
            <div class="form-group row">
              <div class="col-lg-2">
                   Logo pour le Site web
              </div>
            <div class="col-md-10">
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             <img  src="{{asset('/images/'.getsetting()->logo)}}" class="zoom img-fluid "  alt="">
             <input type="file" name="logo" value="">
            </div>
            </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-2">
                   Nom de Site Web
              </div>
            <div class="col-md-10">
              {{ Form::text('site_name', $sitesetting->site_name,['class'=>'form-control'])}}
              @error('site_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            </div>
            <div class="form-group row">
            <div class="col-lg-2">
                Slegon
            </div>
            <div class="col-md-10">
              {{ Form::text('slegon', $sitesetting->slegon,['class'=>'form-control'])}}
              @error('slegon')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            </div>
            <!--div class="form-group row">
              <div class="col-lg-2">
                    Email de Developpeur
              </div>
                <div class="col-md-10">
                  {{ Form::text('developper_email',$sitesetting->developper_email,['class'=>'form-control'])}}
                           
                    @error('developper_email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-2">
                             Nom de Developpeur
              </div>
                <div class="col-md-10">
                  {{ Form::text('developper_name', $sitesetting->developper_name,['class'=>'form-control'])}}
                    @error('developper_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div-->
            <div class="form-group row">
            <div class="col-lg-2">
               Email de Site
            </div>
              <div class="col-md-10">
                 <input type="text" name="site_email" value="{{$sitesetting->site_email}}" required class="form-control">
                  @error('site_email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
            <div class="col-lg-2">
                Telephone de Site
            </div>
              <div class="col-md-10">
                <input type="text" name="site_phone" value="{{$sitesetting->site_phone}}" required class="form-control">
                 
                           
                  @error('site_phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>
<Button type="submit" name="submit" class="btn btn-success">Sauvegarder  <i class="fa fa-save"></i>
</Button>
</form>
           
        </div>
    </div>

    </div>
  </div>
</div>
</section>
</div>


@endsection

@section('footer')
    
@endsection