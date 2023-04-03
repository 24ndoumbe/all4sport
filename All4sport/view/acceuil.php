
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SITE MARCHAND</title>
</head>

<body>

    <nav>

        <a href="#" class="logo"><span>A</span>ll4<img src="logo sport.jfif" alt=""><span>S</span>port </a>
        <h1></h1>
        <div class="onglets">
            <a href="../view/acceuil.php">Acceuil</a>
            <a href="../view/acceuil.php">Presentation</a>
            <a href="../controller/bddproduits.php">Produits</a>
            <a href="#">Rayons</a>
            <a href="#contact">Contact</a>
        </div>


        <button><a href="../controller/connexioncontroller.php">CONNEXION</a></button>


        <br>

        <header>
            <section class="acceuil" id="acceuil">
                <div class="contenu"></div>
            </section>
            
        </header>



        <section class="main" id="presentation">
            <div class="content">
                <h1>PRESENTATION</h1>
                <p>ALL4SPORT a été créé en 2008 à partir d’une idée toute simple : répondre aux besoins des sportifs
                    amateurs et passionnés en leur proposant une gamme d'articles de sports adaptés à chacun d’eux.

                    ALL4SPORT est une société anonyme au capital de 150 K€, elle réalise un chiffre d’affaire annuel de
                    1,2
                    M€ et compte plus de 200 collaborateurs. Son siège social est basé à Lille, carrefour de l'Europe,
                    grande ville étudiante et dynamique.</p>
            </div>
  

            <footer>
            <p id="contact">&copy;: 03 27 00 00 00</p>
            <div class="row">
                <i class="fas fa-envelope">all4sport@gmail.com</i>
            </div>
            <div class="row">
                <i class="fa fa-twitter"></i>
            </div>
        </footer>
</body>


</html>
 <?php
 // include "../View/header.php" 

?>



     <!--<a href="../view/acceuil.php" class="logo"><span>A</span>ll4<img src="../view/logo sport.jfif" alt=""><span>S</span>port </a>
        <h1></h1>
        <div class="onglets">
            <ul>
           <li> <a id='onglet'href="../view/acceuil.php">Acceuil</a></li>
          <li> <a id='onglet'href="../controller/bddproduits.php">Produits</a></li>
    
           <li> <a id='onglet'href="#">Contact</a></li>
           <li> <a id='onglet' class="rayon" href="#">Rayons</a></li>
           </ul>
</div>

    <section class="main" id="presentation">
        <div class="content">
            <h1>PRESENTATION</h1>
            <p>ALL4SPORT a été créé en 2008 à partir d’une idée toute simple : répondre aux besoins des sportifs
                amateurs et passionnés en leur proposant une gamme d'articles de sports adaptés à chacun d’eux.

                ALL4SPORT est une société anonyme au capital de 150 K€, elle réalise un chiffre d’affaire annuel de 1,2
                M€ et compte plus de 200 collaborateurs. Son siège social est basé à Lille, carrefour de l'Europe,
                grande ville étudiante et dynamique.</p>
        </div>



</body>
-->



<?php




?>

<style>

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    background-color: whitesmoke;

}

.logo {
    color: rgb(130, 11, 241);
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}

.logo span {
    color: orange;
}

.logo img {
    height: 100px;
    width: 100px;
}

header {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-size: cover;
    color: pink;
    padding: 100px;
    width: 85%;
    background-image: url(imagecouverture.jfif);
    position: relative;
    min-height: 50vh;
}

nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    border-bottom: 5px solid black;
}

nav .onglets {
    margin-top: 3px;
    margin-left: 300px;
}

button {
    margin-bottom: 50px;
    font-size: 30px;
    font-family: 'Playfair Display', serif;
    cursor: pointer;
    text-align: center;
    align-content: center;
    background-color: whitesmoke;

}

.main {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main h1 {
    font-family: 'Playfair Display', serif;
    font-size: 50px;
    align-content: center;
    text-align: center;
    border: 10px;

}


footer {
    margin-top: 300px;
    border-top: 5px solid white;
    background-color: rgb(0, 0, 0);
    color: #fff;
    padding: 60px 600px;

}



</style>