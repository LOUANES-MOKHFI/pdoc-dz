@extends('layouts.app')

@section('title')
    Espace E-Learning
@endsection
@section('header')

<style type="text/css">
.body1{
    margin-top:20px;
color: #6c7293;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e7eaed;
    border-radius: 0;
}

.accordion .card {
    margin-bottom: .75rem;
    box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
    border-radius: .25rem;
}
.accordion .card .card-header {
    background-color: transparent;
    border: none;
    padding: 2rem;
}
.grid-margin {
    margin-bottom: 0.625rem;
}
.accordion .card .card-header a[aria-expanded="true"]:before {
    content: "\F374";
}
.accordion .card .card-header a:before {
    font-family: "Material Design Icons";
    position: absolute;
    right: 7px;
    top: 0;
    font-size: 18px;
    display: block;
}
.accordion .card .card-header a[aria-expanded="false"]:before {
    content: "\F415";
}
</style>
@endsection
@section('content')
  <div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">ESPACE E-LEARNING</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">A propos</span>
      </div>
</div>
<div class="body1">
<div class="container">
      <div class="text-center">
          <h3>A propos d'ESPACE E-LEARNING</h3>
      </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12 grid-margin">                                                                     
                  <div class="card">
                    <div class="faq-block card-body">
                      <div class="container-fluid py-2">
                      </div>
                      <div id="accordion-1" class="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                               ESPACE E-LEARNING
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-1">
                            <div class="card-body">
                               <p class="mb-0" align="justify">L’enseignant y dépose ses cours TD et conférences. Mais la nouveauté ici  c’est la disponibilité des différents types d’examens précédents pour que l’étudiant puisse s’y adapter.</p>
                              </p><p>
                            </p></div>
                          </div>
                        </div>
                        
                       
                      </div>
                    </div>
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