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
      "loginVolunteer"
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
    ],
    "logout" => [
      "admin",
      "logoutVolunteer",
    ],
    "deleteMessage" => [
      "admin",
      "deleteMessage",
    ],
    "ListMessage" =>[
      "message",
      "ListMessage",
    ],
    "writeMessage" =>[
      "message",
      "writeMessage"
    ]
    // ["id"=>["integer"]]

    // "login" => [
    //   "admin",
    //   "loginUser"
    // ]
  ];

}

 ?>
