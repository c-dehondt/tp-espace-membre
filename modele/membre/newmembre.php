<?php
function newmembre($pseudo, $pass_hache, $email)
{
  global $bdd;
  // Insertion nouveau membre
  $req = $bdd->prepare('INSERT INTO membres(pseudo, motDePasse, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
  $req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));
}
?>
