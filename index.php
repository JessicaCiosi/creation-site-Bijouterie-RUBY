<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bijouterie RUBY</title>
<style src="style.css"></style>
</head>
<body>
    <?php

        include 'header.html';
        include 'menu.html';

        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'accueil' :
                    include 'accueil.html';
                break;
                case 'a-propos' :
                    include 'a-propos.html';
                break;
                case 'contact' :
                    include 'contact.html';
                break;
                default :
                echo "erreur";
                break;
            }
        }else{
            include 'accueil.html';
        }

        include 'footer.html';
    ?>
</body>
</html>