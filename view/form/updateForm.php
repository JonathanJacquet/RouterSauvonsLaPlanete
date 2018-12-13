<h3> Formulaire de modification</h3>
  <form action="" method="post">
    <input type="hidden" id="id" name="ID_Volunteer" value="<?php echo (isset($volunteer)?$volunteer["ID_Volunteer"]:"");?>">
    <div>
      <label for="Name"><strong>Nom :</strong></label>
      <input type="text" id="Name" name="Name" value="<?php echo (isset($volunteer)?$volunteer["Name"]:"");?>">
    </div>
    <div>
      <label for="LastName"><strong>Prénom :</strong></label>
      <input type="text" id="LastName" name="LastName" value="<?php echo (isset($volunteer)?$volunteer["LastName"]:"");?>">
    </div>
    <div>
      <label for="Password"><strong>Mot de passe :</strong></label>
      <input type="password" id="Password" name="Password" value="<?php echo (isset($volunteer)?$volunteer["Password"]:"");?>">
    </div>
    <div>
      <label for="Status"><strong>Statut :</strong></label>
      <input type="text" id="Status" name="Status" value="<?php echo (isset($volunteer)?$volunteer["Status"]:"");?>">
    </div>
    <div>
      <label for="Years"><strong>Age :</strong></label>
      <input type="number" id="Years" name="Years" value="<?php echo (isset($volunteer)?$volunteer["Years"]:"");?>">
    </div>
    <div>
      <label for="Comment"><strong>Commentaire :</strong></label>
      <input type="text" id="Comment" name="Comment" value="<?php echo (isset($volunteer)?$volunteer["Comment"]:"");?>">
    </div>
    <div>
      <label for="Disponibility"><strong> Disponibilité:</strong></label>
      <select name="Disponibility" id="Disponibility" value="<?php echo (isset($volunteer)?$volunteer["Disponibility"]:"");?>">
        <option value="1" selected>Disponible</option>
        <option value="0">Indisponible</option>
      </select>
    </div>
    <div>
      <label for="Street"><strong>Rue :</strong></label>
      <input type="text" id="Street" name="Street" value="<?php echo (isset($volunteer)?$volunteer["Street"]:"");?>">
    </div>
    <div>
      <label for="City"><strong>Ville :</strong></label>
      <input type="text" id="City" name="City" value="<?php echo (isset($volunteer)?$volunteer["City"]:"");?>">
    </div>
    <div class="button">
      <button type="submit">Enregistrer</button>
    </div>
  </form>
