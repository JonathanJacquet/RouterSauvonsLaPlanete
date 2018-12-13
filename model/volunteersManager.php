<?php
//  function that list volunteers
function getListVolunteers()   {
  $db = getDataBase();
  $query = $db->query("SELECT * FROM Volunteers");
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();
  return $result;

}

//  function that add volunteer
function addVolunteers($form)  {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Volunteers (Name, LastName, Password, Status, Years, Comment, Disponibility, Street, City) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $result = $query->execute([$form["Name"], $form["LastName"], $form["Password"], $form["Status"], $form["Years"], $form["Comment"], $form["Disponibility"], $form["Street"], $form["City"]]);

  $query->closeCursor();
  return $result;

}

//  function that update Volunteer
function updateVolunteers($form) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE Volunteers SET Name = :Name, LastName = :LastName, Password = :Password, Status = :Status, Years = :Years, Comment = :Comment, Disponibility = :Disponibility, Street = :Street, City = :City
                         WHERE ID_Volunteer = :ID_Volunteer");
  $result = $query->execute([
    "Name" => $form["Name"],
    "LastName" => $form["LastName"],
    "Password" => $form["Password"],
    "Status" => $form["Status"],
    "Years" => $form["Years"],
    "Comment" => $form["Comment"],
    "Disponibility" => $form["Disponibility"],
    "Street" => $form["Street"],
    "City" => $form["City"],
    "ID_Volunteer" => $form["ID_Volunteer"]
  ]);

  $query->closeCursor();
  return $result;
}

// function that delete volunteer
function deleteVolunteer($id) {
  $db = getDataBase();

  $query = $db->prepare("DELETE FROM Volunteers WHERE ID_Volunteer = ?");
  $result = $query->execute([$id]);

  $query->closeCursor();
  return $result;
}
//  function that get one volunteer
function getOneVolunteer($id) {
  $db = getDataBase();

    $query = $db->prepare("SELECT * FROM Volunteers WHERE ID_Volunteer = ?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $query->closeCursor();
    return $result;

}



//  function sort volunteers
// function getSortedVolunteer($form) {
//   $db = getDataBase();
//
//   $sql = "SELECT * FROM Volunteers";
//   if(!empty($form["order"]) && isset($form["order"])) {
//     $sql .= " ORDER BY " . $form["order"];
//   }
//   $query = $db->query($sql);
//   $result = $query->fetchall(PDO::FETCH_ASSOC);
//
//   $query->closeCursor();
//   return $result;
// }


function getSortedVolunteer($form) {
  $db = getDataBase();
  //On démarre la requête avec les paramètres qu'on exécutera stockés dans un tableau
  $sql = "SELECT * FROM Volunteers ";
  $params = [];
  //On construit la requête sur la base des paramètres passés dans le post
  if((isset($form["Disponibility"])) || !empty($form["Disponibility"]) || (!empty($form["City"]))) {
    $sql .= "WHERE ";
    if(!empty($form["City"])){
      $sql .= "City = ? ";
      array_push($params, $form["City"]);
      if(isset($form["Disponibility"]) && !empty($form["Disponibility"])){
        $sql .= "AND Disponibility = ? ";
        array_push($params, $form["Disponibility"]);
      }
    }
    else {
      if(isset($form["Disponibiity"])){
        $sql .= "Disponibility = ? ";
        array_push($params, $form["Disponibility"]);
      }
    }
  }
  //On ordonne le résultat quoiqu'il arrive
  $sql .= "ORDER BY " . $form['Sort'];
  //On réalise la requête de manière classique
  $query = $db->prepare($sql);
  $query->execute($params);
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}


// //  function sort volunteers by city
// function getSortedVolunteerByCity($form, $db) {
//   $sql = "SELECT * FROM Volunteers WHERE City = ?";
//   if($form["City"] === $db["City"]) {
//     $sql .= " ORDER BY " . $form["order"];
//     }
//   }
//   $query = $db->query($sql);
//   $result = $query->fetchall(PDO::FETCH_ASSOC);
//
//   $query->closeCursor();
//   return $result;





//
// //function that sort by indisponibility
// function sortVolunteerByIndisponibility($db) {
//   $query = $db->query("SELECT * FROM Volunteers ORDER BY Disponibility DESC");
//   $result = $query->fetchall(PDO::FETCH_ASSOC);
//
//   $query->closeCursor();
//   return $result;
// }
