<?php 
if($_POST){
    $emailTo="jessicaaguiiii@gmail.com";
    $message='Nom et prénom : '.$_POST['nom'].' '.$_POST['prenom']. "\r\n";
    $message.='Numéro de téléphone : '.$_POST['numero']. "\r\n \r\n";
    $message.=$_POST['message'];
    $headers='From: ' .$_POST['mail'];

    if(mail($emailTo, "CONTACT - Bijouterie RUBY", $message, $headers)){
        $msg="Votre message a bien été envoyé !";
    }else{
        $msg="Tous les champs doivent être complétés !";
    }
}
?>
<main class="main-contact">
    <section class="section-titre-contact">
        <div class="titre-contact">
            <h1>NOUS CONTACTER</h1>
        </div>
    </section>
    <section class="section-form-contact">
        <form class="form-contact" method="POST" action="">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input class="input-form" type="text" id="nom" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input class="input-form" type="text" id="prenom" name="prenom" placeholder="Votre prénom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="input-form" type="email" id="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input class="input-form" type="text" id="numero" name="numero" size="14" maxlength="14" placeholder="Votre numéro de téléphone" value="<?php if(isset($_POST['numero'])) { echo $_POST['numero']; } ?>">
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea name="message" id="message" cols="30" rows="10"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
            </div>
            <button type="submit" class="boutonForm">ENVOYER</button>
            <?php 
            if(isset($msg)) {
                echo $msg;
            }    
            ?>
        </form>
    </section>
</main>