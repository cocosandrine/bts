<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="">GESTION FACTURATION</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="">GF</a>
    </div>
      <ul class="sidebar-menu mt-2">
          <li class="menu-header">Acceuil</li>

            <div class=" hide-sidebar-mini">
              <a href="{{route('home')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fa fa-home"></i> Tableau de bord
              </a>
            </div>
          <li class=" mt-3 mb-3 nav-item dropdown">
           <!-- <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>FICHIERS DE BASE</span></a>-->
          <!--  <ul class="dropdown-menu"></ul>-->


            <li class="nav-item dropdown">

                <a class="nav-link" href="{{route('clients.index')}}">
                    <i class="fas fa-users"></i> <span>CLIENTS</span></a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link" href="{{route('abonnements.index')}}">
                    <i class="fa fa-bell"></i> <span>ABONNEMENTS</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('services.index')}}">
                    <i class="fas fa-sliders-h"></i> <span>SERVICES</span></a>
            </li>



                <li class=" mt-0 mb-0 nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-invoice"></i> <span>FACTURES</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route('factures.index')}}">Liste facture</a></li>
                        <li><a class="nav-link" href="">Factures réglés</a></li>
                        <li><a class="nav-link" href="">Factures non réglés</a></li>
                        <li><a class="nav-link" href="">Règlement en cours</a></li>
                    </ul>
                </li>


            <li class="nav-item dropdown">
            <a class="nav-link" href="">
                <i class="fas fa-user-circle"></i> <span>UTILISATEURS</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="">
                <i class="fas fa-user-graduate"></i> <span>ADMINISTRATEUR</span></a>
        </li>
          </li>

          <li class="menu-header">{{-- Operations --}}</li>
          <li class="menu-header">{{-- Editions --}}</li>
          <li class="menu-header">{{-- Outils --}}</li>

      </ul>




</aside>
