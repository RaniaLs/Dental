<?php
$title = "Liste des patients";

ob_start();
?>
    <a href="index.php?action=create" class="btn btn-primary">Sign up</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= $patient->id ?></td>
                <td><?= $patient->username ?></td>
                <td><?= $patient->phone ?></td>
                <td><?= $patient->email ?></td>
                <td><?= $patient->password ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $patient->id?>" class="btn btn-success btn-sm">Modifier</a>
                    <a href="index.php?action=delete&id=<?php echo $patients->id?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>