<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$country = getOneEntity("country", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" value="<?php echo $country["name"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($country["picture"])) : ?>
            <img src="../../../uploads/<?php echo $country["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $country["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
