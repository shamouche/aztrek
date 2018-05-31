<?php
require_once '../../../model/database.php';

$list_sejours = getAllEntity("sejour");

require_once '../../layout/header.php';
?>

<h1>Gestion des séjours</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Descrption</th>
            <th>Photo</th>
            <th>Prix</th>
            <th>Durée</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_sejours as $sejour) : ?>
            <tr>
                <td><?php echo $sejour["title"]; ?></td>
                <td><?php echo $sejour["description"]; ?></td>
                <?php $picture = (!empty($sejour["picture"])) ? "../../../uploads/" . $sejour["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $sejour["price"]; ?>€</td>
                <td><?php echo $sejour["duration"]; ?> jours</td>
                <td><?php echo $sejour["niveau"]; ?>/5</td>
                <td>
                    <a href="update.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>