<?php
  include "template/header.php";
  include "view/form/sortForm.php";


 ?>

 <h2>Liste des volontaires</h2>

 <a href="addVolunteer" class="btn btn-success text-light mt-5">Ajouter un bénévole</a>

 <div class="container">
 <div class="row">

<?php
foreach ($volunteers as $key => $value) {

 ?>


  <div class="col-12 col-sm-12 col-md-4">
    <div class="card border-success mb-3">
      <div class="card-header"><?php echo $value["Name"] . "&nbsp" . $value["LastName"]?></div>
      <div class="card-body text-success">
        <p class="card-text"><?php echo "Statut : " . $value["Status"] ?></p>
        <p class="card-text"><?php echo "Age : " . $value["Years"] ?></p>
        <p class="card-text"><?php echo $value["Comment"] ?></p>
        <p class="card-text"><?php echo "Disponibilité : " . $value["Disponibility"] ?></p>
        <p class="card-text"><?php echo "Adresse : " . $value["Street"] ?></p>
        <p class="card-text"><?php echo "Ville : " . $value["City"] ?></p>
          <a href="updateVolunteer?id=<?php echo $value["ID_Volunteer"];?>" class="btn btn-success text-light">Modifier</a>
          <a class="btn btn-danger text-light" href="deleteVolunteer?id=<?php echo $value["ID_Volunteer"];?>">Supprimer</a>
      </div>
    </div>
  </div>



<?php
}
 ?>
</div>

</div>
<?php
  include "template/footer.php";
 ?>
