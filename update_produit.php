<?php
ob_start();
require_once "config/connexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $sql = "UPDATE produit SET libelle=?, prix=?, qte=?, description=? WHERE id=?";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$_POST['libelle'], $_POST['prix'], $_POST['qte'], $_POST['des'], $_GET['id']]);
}

if (isset($_GET['id'])) {
    $sql2 = "SELECT * FROM produit WHERE id =" . $_GET['id'];
    $res = $connexion->query($sql2);
    $lesproduits = $res->fetch(PDO::FETCH_ASSOC);

    ?>
    <form action="<?= $_SERVER['PHP_SELF'] . "?id=" . $_GET['id'] ?>" method="post">

    <div class='mb-3'>
            <label for='libelle' class='form-label'>Libellé</label>
            <input type='text' class='form-control' id='libelle' name='libelle' value="<?= $lesproduits['libelle'] ?>">
        </div>
        <div class='mb-3'>
            <label for='prix' class='form-label'>Prix</label>
            <input type='text' class='form-control' id='prix' name='prix' value='<?= $lesproduits['prix'] ?>'>
        </div>
        <div class='mb-3'>
            <label for='qte' class='form-label'>Quantité</label>
            <input type='text' class='form-control' id='qte' name='qte' value='<?= $lesproduits['qte'] ?>'>
        </div>
        <div class='mb-3'>
            <label for='des' class='form-label'>Description</label>
            <input type='text' class='form-control' id='des' name='des' value='<?= $lesproduits['description'] ?>'>
        </div>
        <button type="submit" class="btn btn-primary">Modifier le produit</button>
    </form>
    <?php
}



$sql2 = "SELECT * FROM produit;";
$res = $connexion->query($sql2);
$lesproduits = $res->fetchAll(PDO::FETCH_ASSOC);

?>
<h1>liste des produit</h1>
<table class="table">
    <tr class="table-primary">
    <th>identifant</th>
    <th>libelle</th>
    <th>prix</th>
    <th>quantite</th>
    <th>promo</th><th colspan=3>action</th>
</tr>
<?php
foreach ($lesproduits as $produit) {
    echo"<tr>
    <td>$produit[0]</td>
    <td>$produit[1]</td>
    <td>$produit[2]</td>
    <td>$produit[3]</td>
    <td>$produit[6]</td>
    <td><a href='delete_produit.php?id=$produit[0]&etat=1'>supprimer</a></td>
    <td><a href='update_produit.php?id=$produit[0]&etat=2'>edit</a></td>
    <td><a href='detail_produit.php?id=$produit[0]&etat=3'>voir detaill..</a></td>
    </tr>";
}
echo"</table>";
echo"<a href='ajouter.php?etat=4' class='btn btn-success bt-sm'>ajouter un produit</a>";
$contenu=ob_get_clean();
include "layout.php";
