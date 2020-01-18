<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Corentin Macé - Contact</title>
    <?php include "assets/php/head.php" ?>
  </head>
  <body>
    <header class="header-small">
      <div class="blacknav">
      <?php include "assets/php/navbar.php" ?>
    </div>
    </header>
    <main>
      <div class="background-white">
      <div class="form">
      <form class="" action="admin/assets/php/add.php" method="post">
        <div class="form__container">
        <label for="nomprenom">Nom Prénom</label>
        <input id="nomprenom" placeholder="Jacques Chirac" type="text" name="pseudo" value="">
      </div>
      <div class="form__container">
        <label for="mail">Mail</label>
        <input id="mail" placeholder="jacques.chirac@wanadoo.com" type="text" name="mail" value="">
      </div>
      <div class="form__container">
        <label for="msg">Message</label>
        <textarea name="msg" rows="8" cols="10" placeholder="Mon message"></textarea>
      </div>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
    </main>
    <footer>
      <div class="background-black">
        <?php include "assets/php/footer.php" ?>
    </div>
    </footer>
  </body>
</html>
