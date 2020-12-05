@extends('admin.layouts.layout')

@section('title')
    Modifier Une Question
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
            <h1>Modifier Une Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">FAQ</li>
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
              <h3 class="card-title">Modifier le Question numéro: {{$faq->id}}</h3>
            </div>
<form method="POST" action="{{ url('admin/FAQ/'.$faq->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="question">Question:</label>
                            
                             {!! Form::textarea("question", $faq->question ,['class'=>'form-control'])!!}
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="reponse">Réponse:</label>
                            {!! Form::textarea("reponse",$faq->reponse ,['class'=>'form-control'])!!}


                                @error('reponse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                     </div>
                      <input type="hidden" name="active" value="1">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5"><i class="fas fa-edit"></i>
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                    </div>
            </form>

    </div>
  </div>
</div>
</section>
</div>


@endsection

@section('footer')
    
@endsection