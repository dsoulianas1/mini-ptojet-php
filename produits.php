<?php
ob_start();
require_once "config/connexion.php";

$sql = "SELECT * FROM produit;";
$res = $connexion->query($sql);
$lesproduits = $res->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case '1':
            echo "<script>alert('Le produit a été supprimé avec succès')</script>";
            break;
        case '2':
            echo "<script>alert('Le produit a été modifié avec succès')</script>";
            break;
        case '3':
            echo "<script>alert('Le produit a été vu en détail avec succès')</script>";
            break;
        case '4':
            echo "<script>alert('Le produit a été ajouté avec succès')</script>";
            break;
    }
}

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
    <td><a href='detail_produit.php?id=$produit[0]&etat=3'>voir détail</a></td>    
    </tr>";
}
echo"</table>";
echo"<a href='ajouter.php?etat=4' class='btn btn-success bt-sm'>ajouter un produit</a>";
$contenu=ob_get_clean();
include "layout.php";