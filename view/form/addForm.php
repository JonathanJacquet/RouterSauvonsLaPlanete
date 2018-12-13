<h3> Formulaire d'ajout</h3>
  <form action="" method="post">
    <div>
      <label for="Name"><strong>Nom :</strong></label>
      <input type="text" id="Name" name="Name" placeholder="Nom">
    </div>
    <div>
      <label for="LastName"><strong>Prénom :</strong></label>
      <input type="text" id="LastName" name="LastName" placeholder="Nom">
    </div>
    <div>
      <label for="Password"><strong>Mot de passe :</strong></label>
      <input type="password" id="Password" name="Password">
    </div>
    <div>
      <label for="Status"><strong>Status :</strong></label>
      <input type="text" id="Status" name="Status">
    </div>
    <div>
      <label for="Years"><strong>Age :</strong></label>
      <input type="number" id="Years" name="Years">
    </div>
    <div>
      <label for="Comment"><strong>Commentaire :</strong></label>
      <input type="text" id="Comment" name="Comment">
    </div>
    <div>
      <label for="Disponibility"><strong> Disponibilité:</strong></label>
      <select name="Disponibility" id="Disponibility">
        <option value="1" selected>Disponible</option>
        <option value="0">Indisponible</option>
      </select>
    </div>
    <div>
      <label for="Street"><strong>Rue :</strong></label>
      <input type="text" id="Street" name="Street">
    </div>
    <div>
      <label for="City"><strong>Ville :</strong></label>
      <input type="text" id="City" name="City">
    </div>
    <div class="button">
      <button type="submit">Envoyer</button>
    </div>
  </form>
