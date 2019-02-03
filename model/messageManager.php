<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, v.Name FROM Messages AS m INNER JOIN Volunteers AS v ON m.sender = v.ID_Volunteer WHERE Getter = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $ID_Sender, $ID_Getter) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Messages (Sender, Getter, Object, Content) VALUES (Sender = :Sender, Getter = :Getter, Object = :Object, Content = :Content)");
  $result = $query->execute([
    "Sender" => $ID_Sender,
    "Getter" => $ID_Getter,
    "Object" => $message["object"],
    "Content" => $message["content"]
  ]);
  $query->closeCursor();
  return $result;
}

// function deleteMessage

 ?>
