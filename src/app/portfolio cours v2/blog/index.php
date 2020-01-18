<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog - Corentin Macé</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/darkly/bootstrap.min.css">
    <link href="timelinev.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <?php include "assets/php/head.php" ?>
  </head>
  <body>
    <header class="headerblack">
      <?php include "assets/php/navbar.php" ?>
      <div class="title-container">
          <div class="title-container__title">
              <h1>Corentin Macé</h1>
              <h2>Blog - Ynov Aix-en-Provence</h2>
          </div>
      </div>
    </header>
    <main>
      <div class="background-white">
        <div class="about">
            <div class="about__title">
                <h2>A propos de moi<h2>
            </div>
      <div class="about__text">
        <p>Je suis Corentin Macé, étudiant en informatique à l'école Ynov Digital School - Aix en Provence.</p>
        <p>J'ai pour but de devenir développeur web fullstack en sortant de mes 5 ans d'études à cette école.</p>
        <p>J'ai 19 ans,je suis né le 27/06/2000 et j'habite Berre L'étang, mes principaux centre d'intêrets sont les jeux vidéos, la musique, la culture Japonaise, l'informatique et les nouvelles technologies.</p>
      </div>
        <div class="about__image">
          <div class="about__image-container">
        <a href="https://www.linkedin.com/in/corentin-mace-300ba3170/"><img src='assets/img/linkedin.svg' alt='' width='40px' height='40px'></a>
        <p>Lien vers mon Linkedin</p>
      </div>
      <div class="about__image-container">
        <a href="https://www.linkedin.com/in/corentin-mace-300ba3170/"><img src='assets/img/cv.svg' alt='' width='40px' height='40px'></a>
        <p>Téléchargez mon CV</p>
      </div>
      </div>

    </div>
      <div class="background-black about__parcours">
        <div class="about">
          <div class="about_title">
            <h2>Mon parcours</h2>
          </div>
          <div id="timeline" class="row ">
              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2></h2>
                      </div>

                      <div class="text col-7">
                          <p></p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2011-2015</h2>
                      </div>

                      <div class="text col-7">
                          <p>Collège Fernand Leger</p>
                      </div>
                  </div>
              </div>
              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2015</h2>
                      </div>

                      <div class="text col-7">
                          <p>Stage de 3°</p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2015-2016</h2>
                      </div>

                      <div class="text col-7">
                          <p>Lycée Jean Monnet - 2nd générale</p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2016-2018</h2>
                      </div>

                      <div class="text col-7">
                          <p>Lycée Pierre Mendes France - STI2D</p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2018-2019</h2>
                      </div>

                      <div class="text col-7">
                          <p>Ynov Aix en Provence - 1ere année de Bachelor</p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2019</h2>
                      </div>

                      <div class="text col-7">
                          <p>Stage à Midi-10</p>
                      </div>
                  </div>
              </div>
              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2>2019-2020</h2>
                      </div>

                      <div class="text col-7">
                          <p>Ynov Aix en Provence - 2ème année de Bachelor</p>
                      </div>
                  </div>
              </div>

              <div class="timelineCont col-12">
                  <div class="row">
                      <div class="date col-5">
                          <h2></h2>
                      </div>

                      <div class="text col-7">
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    <footer>

    </footer>
    <script src="jquery.timelinev.js"></script>
    <script>
        $(function(){
            $('#timeline').timelinev({
                containerDivs:    '.timelineCont',
                dateDiv:         '.date',
                textDiv:         '.text',
                dateHtml:        'h2',
                textHtml:        'p',
                dateActiveClass: '.active',
            });
        });
    </script>
  </body>
</html>
