
      <?php
      include 'vue/header/header.php';

      if (isset($_GET["section"]) && $_GET["section"]== "user"):
        include 'vue/membre/newmembre.php';
        else:
          include 'vue/membre/membre.php';
     endif;

      include 'vue/footer/footer.php';

// if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
// {
//     echo 'Bonjour ' . $_SESSION['pseudo'];
// }
?>
