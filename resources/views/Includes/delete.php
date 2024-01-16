<?php
$title = "Supprimer patient";
ob_start();
?>
<p>Voulez vous vraiment supprimer le patient ?</p>
    <a class="btn btn-danger" href="index.php?action=destroy&id=<?php echo $id?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=list">Annuler la suppression</a>
<?php
$content = ob_get_clean();
include_once 'views/layout.php';