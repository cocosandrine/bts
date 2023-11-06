<!DOCTYPE html>
<html lang="en">

<head>
  <link href="/css/app.css" rel="stylesheet">
  <!-- Bootstrap CSS & JS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap-icons.css">
<script src="/js/bootsrap.bundle.js"></script>





   <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">-->

  <!-- Bootstrap CSS & JS Online
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      -->
  <script src="/js/bootstrap.bundle.min.js"></script>
  <!-- END Bootstrap -->
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion Facture </title>
</head>

<body>
  <!--  Header ou est le lien  -->
  <div class="container-fluid p-0">
    <img src="/img/tete.jpg" class="resp" style="height: 200px ;">
  </div>
  <!-- End Header see whatsapp-->
  <!--  Navbar -->
  <!-- https://getbootstrap.com/docs/5.0/components/navbar/  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="{{ url('/home')}}">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/">News</a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="#">Archives</a>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Factures
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Facture réglé</a></li>
              <li><a class="dropdown-item" href="#">Facture non réglé</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Tous les factures</a></li>


            </ul>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>-->
        </ul>
       <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>-->
      </div>
    </div>
  </nav>
  <!-- End Navbar -->



  <!-- Sidenav & Body & Sidbar  -->
  <div class="container" style="margin-top: 20px; margin-left:0px;">
    <div class="row">




      <!-- 4.1)  Sidenav avec 2 colonnes -->
      <div class="col-2" style="margin-right:20px; margin-bottom:5px;">
        <!-- Mettez ici le contenu de votre sidenav: des liens, des boutons de commandes...  -->


        <div class="sidebar">
          <header>Tableau de bord</header>
          <a href="{{ url('/client')}}" class="active">
            <i class="bi bi-people-fill"></i>
            <span>Client</span>
          </a>
          <a href="{{ url('/listeabone')}}" class="active">
            <i class="fas fa-link"></i>
            <span>Abonnement</span>
          </a>
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Factures</span>
          </a>
          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Suivi factures</span>
          </a>
          <a href="#">
            <i class="far fa-question-circle"></i>
            <span>Service</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Administrateur</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
</nav>
        </div>


      </div>
      <!-- End Sidenav-->


      <!-- BODY avec 9 colonnes-->
      <div class="col-9">
        <div class="card" style="width: 100%; margin-left:75px; margin-right:0px;">
          <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;" style="width: 100%;">
             BIENVENU !
          </div>
        </div>

        <div class="container">
              @yield('content')

        </div>

      </div>
      <!-- End Body-->



    </div>
  </div>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

      <a class="text-white" href="https://mdbootstrap.com/"></a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>
