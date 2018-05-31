<?php require_once '../../layout/header.php'; ?>

<h1>Nouveau pays</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
