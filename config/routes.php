<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "admin",
      "login"
    ],
    "ListVolunteers" => [
      "admin",
      "ListVolunteers"
    ],
    "addVolunteer" => [
      "admin",
      "addVolunteer",
      // ["message"=>["string"]]
    ],
    "deleteVolunteer" => [
      "admin",
      "delete",
      ["id"=>["integer"]]
    ],
    "updateVolunteer" => [
      "admin",
      "update",
      ["id"=>["integer"]]
    ],
    "sortVolunteer" => [
      "admin",
      "sortVolunteer",
    ]
    // ["id"=>["integer"]]

    // "login" => [
    //   "admin",
    //   "loginUser"
    // ]
  ];

}

 ?>
