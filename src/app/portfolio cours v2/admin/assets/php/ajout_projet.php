<?php
$param = parse_ini_file('db.ini');

  try {
    $dbh = new PDO($param['url'], $param['user'], $param['password']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }

  if(isset($_POST['name_projet'])) {
    $name_projet=$_POST['name_projet'];
  } else {
    $name_projet="";
  }

  if(isset($_POST['description'])) {
    $description=$_POST['description'];
  } else {
    $description="";
  }

  if(isset($_POST['langage_used'])) {
    $langage=$_POST['langage_used'];
  } else {
    $langage="";
  }



  if(empty($name_projet) OR empty($description)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "INSERT INTO projets(nom_projet, description, langage)  VALUES(?,?,?)";
    $sql = $dbh->prepare($query);
    $sql->execute([$name_projet,$description,$langage]);
    $dbh = null;
    var_dump($comp . $percent);
    // echo('Competence ajoutée');
    header('location: admin_page.php#projet-container');
    exit;
  }
?>
