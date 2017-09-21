  <h2>Nouveau membre</h2>

  <div class="row">
    <form action="controleur/membre/index.php" method="post" class="col s12">

      <!-- pseudo utilisateur -->
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" name="pseudo" class="validate">
          <label for="first_name">Pseudo</label>
        </div>

      <!-- Mot de passe utilisateur -->
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="pass" class="validate">
          <label for="password">Mot de passe</label>
        </div>
      </div>

      <!-- verification mot de passe utilisateur -->
      <div class="row">
        <div class="input-field col s12">
          <input id="repassword" type="password" name="repass" class="validate">
          <label for="repassword">Retapez votre mot de passe</label>
        </div>
      </div>

      <!-- Email utilisateur -->
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
          <?php if (!isset($_SESSION['erreur']) ): ?>
          <p>probleme de mot de passe</p>
          <?php endif; ?>
        </div>
      </div>


      <div class="card-action">
        <input class="waves-effect waves-light btn" type="submit" value="valider">
      </div>
    </form>
  </div>
