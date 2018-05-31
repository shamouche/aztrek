<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$duration = $_POST["duration"];
$niveau = $_POST["niveau"];
$category_id = $_POST["category_id"];
$pays_id = $_POST["pays_id"];

$picture = "";

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
insertSejour($title, $picture, $description, $price, $duration, $niveau, $category_id, $pays_id);

// Redirection vers la liste
header("Location: index.php");