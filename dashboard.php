<?php
//Compteur visites sur le site

//Connexion à la base de données
$databaseHost = 'localhost';
$databaseName = 'id15964592_bijouterieruby';
$databaseUsername = 'id15964592_jessicabr';
$databasePassword = 'Jessica04082001*';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//Ajout d'un nouveau visiteur
$visitor_ip=$_SERVER['REMOTE_ADDR'];

//Test si l'utilisateur est unique
$requete="SELECT * FROM counter_table WHERE ip_address='$visitor_ip'";
$resultat = mysqli_query($mysqli, $requete);

//Test erreur
if(!$resultat){
    die("erreur<br>".$requete);
}
$total_visitors=mysqli_num_rows($resultat);
if($total_visitors<1){
    $requete="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
    $resultat = mysqli_query($mysqli, $requete);
}

//Récupérer les visiteurs existants 
$requete="SELECT * FROM counter_table";
$resultat = mysqli_query($mysqli, $requete);

//Test erreur 
if(!$resultat){
    die("erreur<br>".$requete);
}
$total_visitors=mysqli_num_rows($resultat);

?>

<!--Nombre de visiteurs total-->
<div class="nbr-visites-total">
    <strong style="font-size:2.5em;"><?php echo $total_visitors; ?></strong><br>
    <p>Visite<?= $total_visitors > 1 ? 's' : '' ?> total</p>
</div>
<div>