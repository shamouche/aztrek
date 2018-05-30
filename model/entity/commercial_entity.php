<?php

function getAllCommerciauxBySejour(int $id) {
    /* @var $connection PDO */
    global $connection;

   $query = "SELECT commercial.*
FROM commercial
INNER JOIN commercial_has_sejour ON commercial_has_sejour.commercial_id = commercial.id
WHERE commercial_has_sejour.sejour_id = :id;"; 
    
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}