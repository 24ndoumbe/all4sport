<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
    <title>connexion</title>
</head>
<body>

<?php


?>   

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

    </nav>


<header>

        
</header>
<section>
<div class="container">
        <form method="GET" action="../controller/connexioncontroller.php">

        <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
            
            <div class="groupe">
            <label>E-mail</label>
            <input type="email" autocomplete="off" />
            <i class="fas fa-envelope"></i>
          </div>
          <br>
          <br>
    
            <div class="groupe">
            <label>Password</label>
            <input type="password" autocomplete="off" />
            <i class="fas fa-user"></i>
          </div>
            <br>
            <div class="pied-formulaire" align="center">
        <button> <a href="../controller/bddproduits.php"></a> Se connecter</button>

        </form>

        </section>
<section>
    <footer>
    <p id="contact">&copy;Contact : 03 27 00 00 00</p>
        <div class="row">
            <i class="fas fa-envelope"></i>
        </div>
        <br>
        

    </footer>
    </section>

</body>
</html>

<style>
    

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

form {
    padding: 30px;
    background-color: rgb(84, 84, 224);
    border-radius: 10px;
}


form .corps-formulaire {
    position: relative;
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    text-align: center;

}

form .corps-formulaire .input {
    margin-top: 50px;
    padding: 10px 5px 10px 30px;
    border: 1px solid #c9c9c9;
    outline-color: #747cdf;
    border-radius: 50px;
    text-align: center;
}


button {
    margin-bottom: 50px;
    font-size: 20px;
    font-family: 'Playfair Display', serif;
    align-items: center;
    justify-items: center;
    justify-content: center;
}

    <style>

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    background-color: whitesmoke;

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



footer {
    margin-top: 300px;
    border-top: 5px solid white;
    background-color: rgb(0, 0, 0);
    color: #fff;
    padding: 60px 600px;

}

</style>

<?php

require_once "../Model/BDD.php";

$bdd = new Bdd();
//     $mail = $_GET['mail'];
// $pwd = $_GET['pwd'];


if (isset($_GET['mail']) && isset($_GET['pwd'])) {
    $mail = $_GET['mail'];
    $pwd = $_GET['pwd'];
    $users = $bdd->getUser($mail, $pwd);
    if ($users == true) {
        session_start();
        foreach ($users as $user) {
            $_SESSION = [
                'email' => $user['email'],
                'tel' => $user['telephone'],
                'datenaissance' => $user['date_naissance'],
                'codeclient' => $user['code_client'],
                
            ];
        }
        header("Location:../controller/bddproduits.php");
    } else {
        $message = "Les identifiants saisis sont incorrects";
    }
    echo "'<p>" . $message . "</p>'";
}
