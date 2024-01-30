<?php
	
// Assurez-vous de mettre les informations de connexion correctes
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "artisans_php";

// Créer une connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        // Récupérer les données du formulaire
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $message = isset($_POST["message"]) ? $_POST["message"] :"";


        // Insérer l'utilisateur dans la base de données
        $sql = "INSERT INTO Contact (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "message envoyé avec succés";

            
            exit();
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    }
    // Fermer la connexion
        $conn->close();
    
?>
<h1>Contact</h1>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <!--Affichage par rapport à la taille de l'écran-->
    <meta name="viewport" content="widht=device-widht,
    initial-scale=1,user="   
    <title>Balise qui s'affiche en haut dans le navigateur</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- 11 lignes, header et footer inclus-->
<!-- emmet : section*9 + TAB -->
    <header>
        
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <!--MARQUE + LIEN -->
            <a href="index.html">
                <h4>ARTISANS</h4>
            </a>
            <!--BOUTON-->
            <button class="navbar-toggler"
           type="button"  data-ds-toggle="collapse" data-bs-target="#navSupportedContent>"   
               <span class="navbar-toggler-icon"></span>  
            </button>
        </div>
        <div class="navSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                <a href="index.html" class="nav-link active">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="about.html" class="nav-link">A propos</a>
            </li>
            <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>
            </ul>
        </div>

     <!-- ICONE RECHERCHE-->
     <form role="search">
        <input type="search" placeholder="mots clés" class="">
        <button type="submit" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
     </form>
    </nav>

    <div>Icon</div>
        <h4>ARTISANS</h4>
        <nav>
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">A propos</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>

        <div>Icon</div>
    </header>

    <main class="container-fluid">

    <section class="row bg-dark text-danger 
            overlay align-items-center mask1"
            id="presentation-about">
            <h1 class="text-center">A propos de nous</h1>
    </section>
         <!--contenu de la page contact-->

    <section class="row">
        <div class="col-md-4 offset-md-2">
            <img src="images/open-space-interior-small.jpg" class="img-fluid rounded-top-pill vignette">
        </div>
        <div class="col-md-4">
            <h2>Parlons de vous</h2>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing eli </p>

            <form action="" method="POST">
                <div class="mb-3">
                    <input type="text" name="name"
                    placeholder="Votre nom" required
                    class="form-control">
                </div>
                 <div class="mb-3">
                    <input type="email" name="email"
                    placeholder="Votre email" required
                    class="form-control">
                </div>

                <textarea placeholer="Votre message"
                name="message" class="form-control">
            </textarea>
                <input type="submit" value="Envoyer" class="btn-btn-primary form-control">
             </form>
            
         </div>   
    </section>
    
    <section class="row">
        <div class="col-md-3 offset-md-2">
            <h5>lorem ipsum dolor</h5>
            <h4>Nos offres</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis expedita
                 possimus  enderit sapiente obcaecati.</p>
        </div>
        <div class="col-md-3">
            <h4>coordonnées</h4>
            <p> 254 Walt road brooklyn</p>
            <p>ville</p>
            <p>code postal</p>
        </div>
        <div class="col col-md-3">
            <h4>informations</h4>
            <p> 254 Walt road brooklyn</p>
            <p>ville</p>
            <p>code postal</p>
        </div>

    </section>
        

        <section id="infos" class="flex">
        <div>
            <h4>A propos</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt excepturi provident eius laborum accusamus molestias inventore perspiciatis natus hic dignissimos voluptas, nemo, ex consequuntur aut totam rerum eaque cum.</p>
        </div>
        <div>
            <h4>Suivez nous</h4>
            
            <a href="#facebook">
                <i class="fa-brands fa-facebook fa-2xl"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-square-twitter fa-2xl"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-instagram fa-2xl"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-pinterest fa-2xl"></i>
            </a>
        </div>
        <div>
            <h4>S'abonner</h4>
            <p>Inscrivez vous pour recevoir nos offres exclusives !</p>

            <form action="" method="">
                <input type="email" placeholder="Votre email" required class="form-control">
                <br>
                <input type="submit" value="S'abonner" class="btn btn-primary">
            </form>
        </div>
         </section>
        </main>

































    <footer>
        <p>Copyright 2023 Formation31 - Mentions légales</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>