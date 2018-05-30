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

<h3>Commercial</h3>
<il>
    <?php foreach ($list_commerciaux as $commercial) : ?>
        
 <a href="sejour.php?id=<?php echo $commercial["id"]; ?>">
        </a>
    </li>
<?php endforeach; ?>
    
    <img src="uploads/<?php echo $list_commerciaux["picture"]; ?>">
    <p><?php echo $list_commerciaux["firstname"]; ?></p>
    <p><?php echo $list_commerciaux["lastname"]; ?></p>
    <p><?php echo $list_commerciaux["telephone"]; ?></p>
 

<?php getFooter(); ?>

    


