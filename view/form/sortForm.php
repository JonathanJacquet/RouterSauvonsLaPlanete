<form class="form-inline my-3" <?php setAction("sortVolunteer"); ?> method="post">
  <div class="form-group mr-4">
    <label class="mr-2">Trier par</label>
    <select class="form-control" name="Sort">
      <!-- <option value="id">Identifiant</option> -->
      <option value="Name">Nom</option>
      <option value="FirstName">Prénom</option>
      <option value="Years">Age</option>
    </select>
  </div>
  <div class="form-group mr-4">
    <label class="mr-2">Ville de résidence</label>
    <input type="text" class="form-control" name="City">
  </div>
  <div class="form-group mr-4">
    <label class="mr-2">Disponibilité</label>
    <select class="form-control" name="Disponibility">
      <option disabled selected>choisir</option>
      <option value="1">Disponible</option>
      <option value="0">Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success">Trier</button>
  </div>
</form>
