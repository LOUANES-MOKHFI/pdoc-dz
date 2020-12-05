@extends('admin.layouts.layout')

@section('title')
    Afficher Un module
@endsection

@section('header')
    <style type="text/css">
      .product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:15px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}

.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}

.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-5px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:black}
.product-grid .title a:hover,.product-grid:hover .title a{color:white}
.product-grid .b a:hover,.product-grid:hover .b a{color:red}
.product-content h3{
  display: inline;
}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}

.fa-folder{
  color: yellow;
}
    </style>
@endsection

@section('content')
    
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Afficher Un module</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Un module</li>
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
              <h3 class="card-title">Afficher Le module <b>{{$module->nom_module}}</b></h3>
            </div>
            <div class="row">
              <div class="col-4">
                <h4>Nom De Module :</h4>{{$module->nom_module}}
                <h4>Etablissement </h4>{{$module->etablissement}}
                <h4>Faculte :</h4>{{$module->faculte}}
                <h4>Domaine : </h4>{{$module->domaine}}
              </div>
              <div class="col-4">
               <h4>Spécialite :</h4>{{$module->specialite}} 
               <h4>Niveaux :</h4>{{$module->niveaux}}
                <h4>Crée le :{{$module->created_at}}</h4>
                </div>
            </div>
    </div>
  </div>
</div>
 <div class="row" >
       <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('/admin/cours/'.$module->id.'/all-cours')}}">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                     <span class="product-new-label">{{count_cours($module->id)}} Cours</span>
                       
                </div>
                 <div class="product-content">
                    <h3 class="title a"><a class="btn btn-info" href="{{url('/admin/cours/'.$module->id.'/all-cours')}}">Les Cours</a></h3>
                    <h3 class="title a"><a class="btn btn-primary" href="{{url('/admin/cours/'.$module->id.'/add-cours')}}">Ajouter</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('/admin/tds/'.$module->id.'/all-tds')}}">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                    <span class="product-new-label">{{count_tds($module->id)}} Tds</span>
                </div>
                 <div class="product-content">
                    <h3 class="title a"><a class="btn btn-info" href="{{url('/admin/tds/'.$module->id.'/all-tds')}}">Les Tds</a></h3>
                    <h3 class="title a"><a class="btn btn-primary" href="{{url('/admin/tds/'.$module->id.'/add-tds')}}">Ajouter</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('/admin/examens/'.$module->id.'/all-examens')}}">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                      <span class="product-new-label">{{count_examens($module->id)}} Examens</span>
                  
                </div>
                <div class="product-content">
                    <h3 class="title a"><a class="btn btn-info" href="{{url('/admin/examens/'.$module->id.'/all-examens')}}">Les examens</a></h3>
                    <h3 class="title a"><a class="btn btn-primary" href="{{url('/admin/examens/'.$module->id.'/add-examens')}}">Ajouter</a></h3>
                </div>
            </div>
        </div>
    </div>


</section>

</div>
@endsection

@section('footer')
    
@endsection
@section('content')
    
@endsection

@section('footer')
    
@endsection