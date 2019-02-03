<?php


function ListMessage() {
  require "view/messageView.php";
}


function deleteMessage() {
  if(deleteMessage($_GET["id"])) {
    redirectTo("ListMessage");
  }
}

function writeMessage() {
  session_start();
  var_dump($_SESSION);
  if(!empty($_POST)) {
    $pseudo = getVolunteerByPseudo($_POST["pseudo"]);
        // var_dump($pseudo);
      addMessage($_POST, $_SESSION["volunteer"]["ID_Volunteer"], $pseudo["ID_Volunteer"]);
    }
  require "view/addMessageView.php";
}

 ?>
