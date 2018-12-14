<?php

function ListVolunteers() {

  $volunteers = getListVolunteers();
  require "view/volunteersView.php";
}

function loginVolunteer() {

//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  $volunteers = getListVolunteers();
  //On nettoie les entrées du formulaire
foreach ($_POST as $key => $value) {
  $_POST[$key] = htmlspecialchars($value);
}
//On récupère les utilisateurs stockés
foreach ($volunteers as $key =>$volunteer) {
  if($volunteer["Name"] === $_POST["Name"] && $volunteer["Password"] === $_POST["Password"]) {
//On démarre une session pour y stocker les informations de l'utilisateur
    initializeUserSession($volunteer);
      redirectTo("ListVolunteers");
      }
    }

  }

require "view/loginView.php";
}

function addVolunteer() {
// if action is add
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
  $_POST[$key] = htmlspecialchars($value);
  if($key ==="Disponibility") {
    $_POST[$key] = intval($value);
  }
}
  addVolunteers($_POST);
    redirectTo("ListVolunteers");
  }
  require "view/addView.php";

}



function delete() {
//if action is delete
    $id = htmlspecialchars($_GET["id"]);
    deleteVolunteer($id);
    // redirecTo("ListVolunteers");
    header("Location: ListVolunteers");
    exit;

    require "view/volunteersView.php";
}


function update() {
//if action is update volunteer
if (isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
    $volunteer = getOneVolunteer($id);
}

if (!empty($_POST)) {
  updateVolunteers($_POST);
  header("Location:ListVolunteers");
  exit;
}
  require "view/updateView.php";

}


function sortVolunteer() {
  $volunteer = getSortedVolunteer($_POST);


  require "view/volunteersView.php";
}

function logoutVolunteer()  {
  logout();
  redirectTo("");
}




// require "view/volunteersView.php";
 ?>
