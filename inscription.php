<?php 
if(isset($_POST['Valider'])){
  if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['confirmMdp'])) {
    if($_POST['mdp'] == $_POST['confirmMdp']){
      echo("Succès")
    }else{
      echo("Confirmation impossible, le mot de passe est différent")
    }
  } else{
    echo("veuillez compléter tous les champs")
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script> <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- JS Bundle -->
    <title>aléo</title>
</head>
<body>
    <main>
        <!-- Le formulaire d'inscription -->
        <section class="vh-100 gradient-custom">
          <form action="" method="POST">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <div class="mt-md-4">
                        
                        <h2 class="d-flex justify-content-center fs-2 fw-bold pb-5">S'inscrire</h2>

                        <div class="form-outline form-white mb-4">
                            <input type="text" id="typeFirstName" class="form-control form-control-lg" placeholder="Prénom" name="prenom"/>
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" placeholder="Nom" name="nom"/>
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email" name="email"/>
                          </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" id="typeEmailX" class="form-control form-control-lg" placeholder="Mot de passe" name="mdp"/>
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Confirmez votre Mot de passe" name="confirmMdp"/>
                        </div>
          
                        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="Valider">S'inscrire</button>
          
                      </div>

                        <div class="col d-flex justify-content-start">
                          <a href="accueil.php" class="text-white-50">retour</a>
                        </div>
                      </div>
                    
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
            
          </section>

    </main>
    
</body>
</html>