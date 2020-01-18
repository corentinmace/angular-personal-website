<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Corentin Macé</title>
    <?php include "assets/php/head.php" ?>

</head>

<body>
    <header id="background">
        <?php include "assets/php/navbar.php" ?>
            <div class="title-container">
                <div class="title-container__title">
                    <h1>Corentin Macé</h1>
                    <h2>Développeur - Photographe</h2>
                </div>
            </div>
    </header>
    <main>
        <div class="background-black">
            <div class="about">
                <div class="about__title">
                    <h2>Qui suis-je ?<h2>
                </div>
          <div class="about__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="about__projet">
            <h2>Mes projets</h2>
                    <div class="tab-container">
                        <div class="headings">
                            <div class="col1">
                                <h3>Nom du projet</h3>
                            </div>
                            <div class="col2">
                                <h3>Description</h3>
                            </div>
                            <div class="col3">
                                <h3>Langage utilisé</h3>
                            </div>
                            <div class="tab-line-separator"></div>
                        </div>
                        <?php
                            $parameters = parse_ini_file('db.ini');
                            $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = $connect->prepare("SELECT * FROM projets");
                            $sql->execute();
                             while ($row = $sql->fetch()) {
                              echo "<div class='content-tab-container'>
                                      <div class='project-collumn-container'>
                                        <div class='comp_project-collumn first-project-col'>".$row['nom_projet']."</div>
                                        <div class='comp_project-collumn second-project-col'>".$row['description']."</div>
                                        <div class='comp_project-collumn third-project-col'>".$row['langage']."</div>
                                      </div>
                                    </div>";
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <div class="background-white">
          <div class="competence">
            <div class="competence__title">
              <h2>Mes compétences</h2>
            </div>
            <div class="competence__subtitle">
              <h3>Langages de programmation</h3>
            </div>
            <div class="comp_tab-container">
                <div class="comp_headings">
                    <div class="comp_col1">

                    </div>
                    <div class="comp_col2">
                        <h3>Nom</h3>
                    </div>
                    <div class="comp_col3">
                        <h3>Pourcentage de maitrise</h3>
                    </div>
                    <div class="comp_tab-line-separator"></div>
                </div>
                <?php
                    $parameters = parse_ini_file('db.ini');
                    $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = $connect->prepare("SELECT * FROM competences WHERE type = 'lang' ");
                    $sql->execute();
                     while ($row = $sql->fetch()) {
                      echo "<div class='content-tab-container'>
                              <div class='project-collumn-container'>
                                <div class='comp_project-collumn comp_first-project-col'><img src='assets/img/svg/".$row['image']."' alt='' width='40px' height='40px'></div>
                                <div class='comp_project-collumn second-project-col'>".$row['nom_comp']."</div>
                                <div class='comp_project-collumn third-project-col'>".$row['pourcentage']."</div>
                              </div>
                            </div>";
                     }
                    ?>
                </div>
            <div class="competence__subtitle">
              <h3>OS</h3>
            </div>
            <div class="comp_tab-container">
                <div class="comp_headings">
                    <div class="comp_col1">

                    </div>
                    <div class="comp_col2">
                        <h3>Nom</h3>
                    </div>
                    <div class="comp_col3">
                        <h3>Pourcentage de maitrise</h3>
                    </div>
                    <div class="comp_tab-line-separator"></div>
                </div>
                <?php
                    $parameters = parse_ini_file('db.ini');
                    $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = $connect->prepare("SELECT * FROM competences WHERE type = 'soft' ");
                    $sql->execute();
                     while ($row = $sql->fetch()) {
                      echo "<div class='content-tab-container'>
                              <div class='project-collumn-container'>
                                <div class='comp_project-collumn comp_first-project-col'><img src='assets/img/svg/".$row['image']."' alt='' width='40px' height='40px'></div>
                                <div class='comp_project-collumn second-project-col'>".$row['nom_comp']."</div>
                                <div class='comp_project-collumn third-project-col'>".$row['pourcentage']."</div>
                              </div>
                            </div>";
                     }
                    ?>
            </div>
            <div class="competence__subtitle">
              <h3>Logiciels</h3>
            </div>
            <div class="comp_tab-container">
                <div class="comp_headings">
                    <div class="comp_col1">

                    </div>
                    <div class="comp_col2">
                        <h3>Nom</h3>
                    </div>
                    <div class="comp_col3">
                        <h3>Pourcentage de maitrise</h3>
                    </div>
                    <div class="comp_tab-line-separator"></div>
                </div>
                  <?php
                      $parameters = parse_ini_file('db.ini');
                      $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      $sql = $connect->prepare("SELECT * FROM competences WHERE type = 'os'");
                      $sql->execute();
                       while ($row = $sql->fetch()) {
                        echo "<div class='content-tab-container'>
                                <div class='project-collumn-container'>
                                  <div class='comp_project-collumn comp_first-project-col'><img src='assets/img/svg/".$row['image']."' alt='' width='40px' height='40px'></div>
                                  <div class='comp_project-collumn second-project-col'>".$row['nom_comp']."</div>
                                  <div class='comp_project-collumn third-project-col'>".$row['pourcentage']."</div>
                                </div>
                              </div>";
                       }
                      ?>
                </div>
            </div>
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
