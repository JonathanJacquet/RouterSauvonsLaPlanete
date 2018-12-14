<?php


function ListMessage() {

  require "view/messageView.php";
}


function deleteMessage() {
  if(deleteMessage($_GET["id"])) {
    redirectTo("messageView.php");
  }
}

function writeMessage() {
  require "view/messageView.php";
}

 ?>
