<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, v.Name FROM Messages AS m INNER JOIN Volunteers AS v ON m.sender = v.ID_Volunteer WHERE Getter = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $sender) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Messages (Sender, Getter, Object, Content, Date) VALUES (Sender = :Sender, Getter = :Getter, Object = :Object, Content = :Content, Date = :Date)");
  $result = $query->execute([
    "Sender" => $sender,
    "Getter" => $message["Name"],
    "Object" => $message["Object"],
    "Content" => $message["Content"]
  ]);
  $query->closeCursor();
  return $result;
}

 ?>
