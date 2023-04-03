

<?php

if (!isset ($_SESSION['codeclient'])) {

    // 
    // $_SESSION = [
    //     'email' => $user['email'],
    //     'tel'=> $user['telephone'],
    //a     'datenaissance'=> $user['date_naissance'],
    // 'codeclient'=> $user['code_client'], ];
   

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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


        <br>

        <header>
            <section class="acceuil" id="acceuil">
                <div class="contenu"></div>
            </section>
        </header>
   
<?php

if (is_array($rayons) || is_object($rayons))
{
foreach ($rayons as $rayon) {
echo' <div class=ray>';
//     echo" <a href='../controller/bddproduits.php?idrayon=".$rayon['id_rayon']."> 
//     <div id='libellerayon' >". $rayon['libelle_rayon']."</div>";
//     echo"</a>";


    echo"   <a href='../controller/bddproduits.php?idrayon=".$rayon['id_rayon']." '   >
    <div id='libellerayon'> ". $rayon['libelle_rayon']."</div>
    </a>" ;

echo'</div>';
echo'</div>';

}}
?>
           


<?php

    echo"<div id='tete'>";



echo " <a href='../controller/paniercontroller.php'>";
echo"<div id='panier'>";
if(empty($_SESSION['panier'])){
    echo"<div id='nbarticle'>  </div>";

}
if (is_iterable($_SESSION['panier']) || is_countable($_SESION['panier']) )
{
$co=count($_SESSION['panier']);
}
 if($co==0){
    echo"<div id='nbarticle'> " .$co." </div>";

 }else{
    echo"<div id='nbarticle'> 0 </div>";

    echo"<span class='fa fa-shopping-basket fa-5x'></span>";
    echo"<p>Mon panier </p>";
    echo"</div>";
    echo"</a>";
 }
 





echo " <a href='../controller/commandesproduits.php'>";
echo"<div id='commandes'>";

if (is_array($nbcommandes) || is_object($nbcommandes))
{
foreach ($nbcommandes as $nbcommande) {
echo"<div id='nbarticle'> " .$nbcommande['nbart'] ." </div>";

}}
echo" <span class='fa fa-folder fa-5x'></span>";
echo"<p>Mes commandes  </p>";
echo"</div>";
echo"</a>";

echo"<div id='user'>";

echo"<div id='user'> " .$_SESSION['codeclient'] ." </div>";

echo" <span class='fa fa-user fa-5x'></span>";
echo"<p>User</p>";
echo"</div>";
echo"</div>";



?>

        </div>
    </nav>

    <style>


#panier {
    width: 100px;

    color:black;
}
#tete{
display:flex;
background-color:#EFCA08;
justify-content: space-between;
width:1300px;
margin-left:950px;

    }
    #commandes{
        width: 100px;
    color:black;
    }
    #nbarticle{
    font-size:40px;
    color:blue;
    margin-left:60px;
    }
#onglet{
    border:1px solid black;
    background-color:#EFCA08;
    border-radius:1px;
    color:black;
    width:120px;
}
ul{
    display:flex;
    justify-content:space-between;
    width:1250px;
    height:30px;
    margin-right:400px;
}
#libellerayon{
    margin-left:1150px;
    border:1px solid black;
    width:90px;
    color:black;
    background-color:white;



    
}
.ray{

    display:none;
}

#user{
color:black;
margin-bottom :30px;

}

</style>

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




footer {
    margin-top: 300px;
    border-top: 5px solid white;
    background-color: rgb(0, 0, 0);
    color: #fff;
    padding: 60px 600px;

}

</style>