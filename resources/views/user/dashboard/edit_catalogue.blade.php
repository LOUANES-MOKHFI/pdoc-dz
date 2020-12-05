@extends('user.dashboard.dashboard')

@section('title')
     Modifier un catalogue
@endsection

@section('header')
   <style type="text/css">
   	.text-center{
  float: center;
}
.body {
  font-family: "Poppins", sans-serif;
  background:#F0F8FF;

}
  .error{
        outline: 1px solid #f00;
      }

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}


.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.uppercase{
  text-transform: uppercase;
}
   </style>
@endsection

@section('content')


<div class="body">
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <section class="content">

    
     <div class="card-body">
<div class="col-md-12 col-12 col-sm-12">
   
    <div class="card">
      
      <div class="card-header row">
       
        <div class="col-md-12 col-sm-12">
          <h3 class="uppercase"><span>{{$catalogue->etablissement}}</span></h3>
        </div>
    
      @include('layouts.flash_msg')
      
   <form method="POST" action="{{ url('/user/update_c/'.$catalogue->id) }}">
                        @csrf
                    <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <input type="text" name="etablissement" class="form-control-lg form-control" required value="{{$catalogue->etablissement}}">
                             
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="structure">Structure<span style="color: red"> *</span></label>
                            <input id="structure" type="text" class="form-control form-control-lg @error('structure') is-invalid @enderror" name="structure" value="{{$catalogue->structure}}" required autocomplete="structure">

                                @error('structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Url de catalogue<span style="color: red"> *</span></label>
                            <input id="url" type="text" class="form-control form-control-lg @error('url') is-invalid @enderror" name="url" required autocomplete="url" value="{{$catalogue->url}} ">

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="thematique">Thématique<span style="color: red"> *</span></label>
                            <input id="thematique" type="text" class="form-control form-control-lg @error('thematique') is-invalid @enderror" name="thematique" value="{{$catalogue->thematique}}" required autocomplete="thematique" autofocus>

                                @error('thematique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="thematique">Catalogue<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="nationalite_catalogue" required> 
                                <option value="{{$catalogue->nationalite_catalogue}}">{{$catalogue->nationalite_catalogue}}</option>
                                <option value="algerienne">Algerien</option>
                                <option value="etrangere">Etrangér</option>
                            </select>

                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning fa fa-btn fa-edit btn-lg px-5">
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{'/user/catalogue/'.$catalogue->id.'/delete'}}" class="btn btn-danger fa fa-btn btn-lg px-5"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>
                        </div>
                    </div>
            </form>
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
        
        </div>
      </div>
    </div>
  
  </div>
 </div>
 </div>
   </div>

 

@endsection

@section('footer')

@endsection
