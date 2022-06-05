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

        <!-- L'en-tête de la page -->
        <?php include_once("header.php"); ?>

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
                                  <h2>Homme</h2>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="https://picsum.photos/300/150?random=1" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h2>Femme</h2>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="https://picsum.photos/300/150?random=3" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h2>Enfant</h2>
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
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">Homme</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <a class="btn btn-primary">Tous les articles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">Femme</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <a class="btn btn-primary">Tous les articles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/150?random=4" class="card-img-top" alt="Image homme">
                            <!-- Corps de la card -->
                            <div class="card-body">
                                <h2 class="card-title">Enfant</h2>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem veniam in provident magni</p>
                                <a class="btn btn-primary">tous les articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <!-- Le pied de page -->
    <?php include_once("footer.php"); ?>

    <!-- script pour les tooltips -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
</html>