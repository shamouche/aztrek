<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_countries = getAllCountry();
$list_categories = getAllEntity("category");

require_once '../../layout/header.php';
?>

<h1>Modifier séjours</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pays">Pays</label>
        <select id="pays" name="pays_id" class="form-control">
            <?php foreach ($list_countries as $country) : ?>
                <?php $selected = ($country["id"] == $sejour["country_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $country["id"]; ?>" <?php echo $selected; ?>><?php echo $country["name"]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="titre" value="<?php echo $sejour["title"]; ?>" class="form-control">
    </div>
     <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?php echo $sejour["description"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($sejour["picture"])) : ?>
            <img src="../../../uploads/<?php echo $sejour["picture"]; ?>" class="img-thumbnail">
            <?php endif; ?>
            <div class="form-group">
        <label for="price">Prix</label>
        <input type="int" id="price" name="price" value="<?php echo $sejour["price"]; ?>" class="form-control">
    </div>
            <div class="form-group">
        <label for="duration">Durée</label>
        <input type="int" id="duration" name="duration" value="<?php echo $sejour["duration"]; ?>" class="form-control">
    </div>
            <div class="form-group">
        <label for="niveau">Niveau</label>
        <input type="int" id="niveau" name="niveau" value="<?php echo $sejour["niveau"]; ?>" class="form-control">
    </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
       <select id="category" name="category_id" class="form-control">
                         <?php foreach ($list_categories as $category) : ?>
                <option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
            <?php endforeach; ?>
        </select>
   <input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
       </div>
   

</form>


<?php require_once '../../layout/footer.php'; ?>
