<?php
session_start();
require '../../modele/connexion_sql.php';?>
<?php if ($_POST['pass']== $_POST['repass']): ?>
<?php
require '../../modele/membre/newmembre.php';

$pass_hache = sha1($_POST['pass']);
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
newmembre($pseudo, $pass_hache, $email);
    ?>
<?php else:?>
<?php header("Location: ../../index.php?section=user"); ?>
<?php $_SESSION["erreur"]["erreur_mot_de_passe"];?>
<?php endif;?>
