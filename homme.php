<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script> <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- JS Bundle -->
    <title>aléo</title>
</head>
<body>
    
    <main>
        <!-- En-tête de la page -->
        <header class="py-5">
            <!-- NavBar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <a href="./accueil.html" class="navbar-brand"><img src="./images/logo_aleo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavBarResponsive" aria-controls="NavBarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="NavBarResponsive">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link fs-2" href="#">Homme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-2" href="#">Femme</a>
                            </li>
                            <li class="nav-item mx-lg-5">
                                <form class="d-flex ms-lg-5">
                                    <input class="form-control rounded-pill" type="search" placeholder="Chercher..." aria-label="Search">
                                    <button class="btn btn-dark rounded-pill" type="submit" ><i class="fas fa-search"></i></button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inscription</a>
                            </li>
                            <li class="nav-item mx-lg-4">
                                <a class="nav-link" href="#" class="navlink"><i class="fas fa-shopping-bag text-white-50 fs-2" data-bs-toggle="tooltip" title="Panier"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Les différentes sections -->

        <!-- 1ère section, Slider d'images avec Femme, Homme et Enfant -->
        <section class="my-4">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col mt-5">
                        <div id="Carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://picsum.photos/300/150?random=2" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h2>Sport</h2>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="https://picsum.photos/300/150?random=1" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h2>Ville</h2>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#Carousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#Carousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- 2ème section, 3 cards avec 1 article Homme, 1 article Femme et 1 article Enfant -->
        <section class="py-5">

            <div class="container">
                <div class="row gy-4 gy-md-0 mt-5">
                    <div class="col-xs-12 col-md-3">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">article 1</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <div class="text-center pt-3 border-top">
                                    <a class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">article 2</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <div class="text-center pt-3 border-top">
                                    <a class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">article 3</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <div class="text-center pt-3 border-top">
                                    <a class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">article 4</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <div class="text-center pt-3 border-top">
                                    <a class="btn btn-primary">Ajouter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </section>

    </main>

    <!-- Pied de la page -->
    <footer class="border-top">

        <div class="container py-5">

            <div class="row align-items-center">

                <div class="col-12 text-start my-3 col-md-4 my-md-0 text-md-start">
                    <a href="#"><img src="./images/logo_aleo.png" alt="Logo"></a>
                  </div>

                <div class="col-12 my-3 text-center col-md-4 my-md-0">
                  <!-- button trigger modal -->
                  <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#ExampleModal">Mentions</a>
                </div>

                <div class="col-12 text-end my-3 col-md-4 my-md-0 text-md-end">
                  <a href="#" class="text-decoration-none text-dark fs-2 fw-bold">Nous contacter</a>
                </div>

            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="ExampleModal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ExampleModalLabel">Warning</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Ce site est un projet fait par des étudiants en première année de BTS SIO</p>
                <p>Les noms des marques utilisées ont été inventées</p>
              </div>
            </div>
          </div>
        </div>

    </footer>

    <!-- script pour les tooltips -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
</html>