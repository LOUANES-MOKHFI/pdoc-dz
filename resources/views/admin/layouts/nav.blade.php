 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
       <img  src="{{asset('/images/'.getsetting()->logo)}}" alt="{{getSetting()->site_name}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 18px">{{getSetting()->site_name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
             @if(Auth::user()->id == 1)
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/sitesetting')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Parametres De site
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item has-treeview">
            <a href="{{url('/universite')}}" class="nav-link">
              <p>
                Etablissements
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon ion ion-person"></i>
              <p>
                Membres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
               @if(Auth::user()->id == 1)
              <li class="nav-item has-treeview">
                <a href="{{url('administrateur')}}"  class="nav-link">
                <i class="nav-icon"></i>
                 <p>Gestion des Administrateurs</p>
                </a>
              </li>
                @endif

             <li class="nav-item has-treeview">
            <a href="{{url('/student')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Gestion des Etudiants
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('teacher')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Gestion des Enseignants
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('autre')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Autres
              </p>
            </a>
          </li>
        </ul>
      </li>

       <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active bg-red">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Ressources
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item has-treeview">
            <a href="{{'/admin/ressource/ressourcePE'}}" class="nav-link">
              <i class="mr-2"></i>
              <p>
                Gestion des Ressources P.E
              </p>
            </a>
          </li>
              <li class="nav-item has-treeview">
            <a href="{{'/admin/ressource/ressourceAO'}}" class="nav-link">
              <i class=" mr-2"></i>
              <p>
                Gestion des Ressources A.O
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="{{'/admin/ressource/ressourceDOC'}}" class="nav-link">
              <i class=" mr-2"></i>
              <p>
                Gestion des Ressources DOC
              </p>
            </a>
          </li>
        </ul>
      </li>
 @if(Auth::user()->id == 1)
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon nav-icon fas fa-book"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
             <li class="nav-item has-treeview">
            <a href="{{url('/admin/books')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Les Livres
              </p>
            </a>
          </li>
             <li class="nav-item has-treeview">
            <a href="{{url('/admin/document')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Les Documents partagés
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="{{url('/admin/catalogue')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
               Les catalogues
              </p>
            </a>
          </li>
        </ul>
      </li>  

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon ion ion-clipboard"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
           <li class="nav-item has-treeview">
            <a href="{{url('/admin/actualites')}}" class="nav-link">
              <i class="nav-icon "></i>
              <p>
                Les Actualités
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="{{url('/demande_article1')}}" class="nav-link">
              <i class="nav-icon "></i>
              <p>
                Les Demandes
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/FAQ')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Foire aux Questions
              </p>
            </a>
          </li>
           
        </ul>
      </li>            
            <li class="nav-item has-treeview">
            <a href="{{url('/bibliographie-modules')}}" class="nav-link">
              <p>
                Bibliographie des modules
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon ion ion-clipboard"></i>
              <p>
                Espaces E-learning
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item has-treeview">
            <a href="{{url('/admin/modules')}}" class="nav-link">
              <i class="nav-icon "></i>
              <p>
                Les Modules
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="{{url('/admin/cours')}}" class="nav-link">
              <i class="nav-icon "></i>
              <p>
                Les Cours
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/tds')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Les Tds
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/examens')}}" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Les Examens
              </p>
            </a>
          </li>
           
        </ul>
      </li>
          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>