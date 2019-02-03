<h2 class="d-flex justify-content-center">Formulaire d'ajout</h2>
<div class="d-flex justify-content-center">
<form action="" method="post">
  <input type="hidden" id="id" name="ID_Volunteer">

    <div class="form-group" style="width : 30em">
    <label for="Name">Nom</label>
    <input type="text" class="form-control" id="Name" name="Name">
  </div>
  <div class="form-group">
  <label for="LastName">Prénom</label>
  <input type="text" class="form-control" id="LastName" name="LastName">
</div>
<div class="form-group">
<label for="password">Mot de passe</label>
<input type="password" class="form-control" id="Password" name="Password">
</div>
<div class="form-group">
<label for="Status">Statut</label>
<input type="text" class="form-control" id="Status" name="Status">
</div>
  <div class="form-group">
    <label for="Years">Age</label>
    <input type="number" class="form-control" id="Years"  name ="Years">
  </div>
  <div class="form-group">
    <label for="Comment">Commentaire</label>
    <input type="Comment" class="form-control" id="Comment"  name ="Comment">
  </div>
  <div class="form-group">
    <label for="Disponibility">Disponibilité:</label>
    <select name="Disponibility" id="Disponibility">
      <option value="1" selected>Disponible</option>
      <option value="0">Indisponible</option>
    </select>
  </div>
    <div class="form-group">
    <label for="Street">Rue :</label>
    <input type="text" class="form-control" id="Street" name="Street">
  </div>
    <div class="form-group">
    <label for="City">Ville :</label>
    <input type="text" class="form-control" id="City" name="City">
  </div>
  <div class="button">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
</form>
