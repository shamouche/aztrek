<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$sejour = getOneSejour($id);
// Récupérer la liste des destinations du pays
$list_commerciaux = getAllCommerciauxbySejour($id);
//debug($list_sejours);

getHeader($sejour["title"]);
?>

<h2><?php echo $sejour["title"]; ?></h2>
<p> <?php echo $sejour["description"]; ?></p>
 <img src="uploads/<?php echo $sejour["picture"]; ?>">
<p>Prix : <?php echo $sejour["price"]; ?> Euros</p>
<p>Durée : <?php echo $sejour["days"]; ?> Jours</p>
<p>Niveau de difficultés : <?php echo $sejour["niveau"]; ?>/5</p>
<p>Categorie : <?php echo $sejour["category"]; ?></p>


<?php foreach ($list_commerciaux as $commercial) : ?>
    <li>
        <img src="uploads/<?php echo $commercial["picture"]; ?>">
        <a href="sejour.php?id=<?php echo $commercial["id"]; ?>">
            <?php echo $commercial["firstname"]; ?>
        </a>
    </li>
<?php endforeach; ?>


<?php getFooter(); ?>

