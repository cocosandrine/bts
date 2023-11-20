<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Gestion facture</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>


                    <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <!--<li class="menu-header">Starter</li>-->

            <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">

                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>CLIENT</span></a>

                    <ul class="dropdown-menu">
                    <li class="{{ Request::is('create_client_traitement') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('client') }}"></a>
                    <!--</li>
                    <li class="{{ Request::is('update_client') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('client') }}"></a>
                    </li>-->



                    <li class="{{ Request::is('index') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('client') }}"><i class="far fa-square"></i> <span>Liste client</span></a>
                    </li>


                    <li class="{{ Request::is('create') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('create-client') }}"><i class="far fa-square"></i> <span>Formulaire d'ajout</span></a>
                    </li>
                </ul>
            </li>



                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>ABONNEMENT</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('listeabone') ? 'active' : '' }}">
                            <a class="nav-link"
                                href="{{ route('abonnement') }}">Liste abonnement</a>
                        </li>

                        <li class="{{ Request::is('') ? 'active' : '' }}">
                            <a class="nav-link"
                                href="{{ url('') }}">Ajout abonnement</a>
                        </li>
            </ul>




                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>SERVICE</span></a>
                </li>


                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>REGLEMENT</span></a>
                </li>

                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>FACTURE</span></a>
                </li>

                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>ARCHIVE</span></a>
                </li>

                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>UTILISATEUR</span></a>
                </li>

                <li class="nav-item dropdown {{ $type_menu === 'forms' ? 'active' : '' }}">
                    <a href="#"
                        class="nav-link "><i class="far fa-file-alt"></i> <span>ADMINISTRATEUR</span></a>
                </li>

        </ul>


    </aside>
</div>
