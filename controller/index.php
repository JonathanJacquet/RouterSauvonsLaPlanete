<?php

  require "../model/volunteersManager.php";
  require "../model/db.php";




// function sort volunteer By age and Name
if(!empty($_POST)) {
  var_dump($_POST);
  $volunteers = getSortedVolunteer($_POST, $db);

}
else {
  $volunteers = getListVolunteers($db);

}

// // if($_POST["City"] === $db["City"])  {
// //   $volunteers = getSortedVolunteerByCity($form, $db);
// // }
// else {
//   $volunteers = getListVolunteers($db);
// }
  require "../view/volunteersView.php";

?>
