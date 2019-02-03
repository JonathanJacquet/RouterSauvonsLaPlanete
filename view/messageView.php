<?php
include "template/header.php";
include "template/nav.php";
session_start();
$user = $_SESSION["volunteer"]["ID_Volunteer"];
  $messages = getMessages($user);
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Expéditeur</th>
      <th scope="col">Objet</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>



<?php
  foreach ($messages as $key => $value) {
?>
  <tr>
    <td><?php echo $value["Name"]; ?></td>
    <td><?php echo $value["Object"]; ?></td>
    <td><?php echo $value["Content"]; ?></td>
    <td><?php echo $value["Date"]; ?></td>
    <td>
      <a href="deleteMessage?id=<?php echo $value["ID_Message"]?>" class="btn btn-danger">Supprimer</a>
    </td>
  </tr>
<?php
  }
?>

  </tbody>
</table>

<?php

include "template/footer.php"

?>
