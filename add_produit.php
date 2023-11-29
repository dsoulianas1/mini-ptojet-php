<?php 
ob_start();
require_once "config/connexion.php";
    $sql = "INSERT INTO produit(libelle, prix, qte, description) VALUES('hp u',4000,7,'hbhbhb')";
    $res = $connexion->query($sql); // res objet PDOstatement

$sql2 = "SELECT * FROM produit;";
$res = $connexion->query($sql2); // res objet PDOstatement
$lesproduits = $res->fetchAll(PDO::FETCH_NUM);
if(isset($_GET['etat'])){
    $etat=$_GET['etat'];
    switch ($etat) {
        case '1':
            echo"<script>alert('le produit a été supprimer avec succées')</script>";
            break;
        case '2':
            echo"<script>alert('le produit a été modifier avec succées')</script>";
            break;
        case '3':
            echo"<script>alert('le produit a vaoir detaille avec succées')</script>";
            break;
        case '4':
            echo"<script>alert('le produit a été ajouter avec succées')</script>";
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
    <td><a href='detail_produit.php?id=$produit[0]&etat=3'>voir detaill..</a></td>
    </tr>";
}
echo"</table>";
echo"<a href='ajouter.php?etat=4' class='btn btn-success bt-sm'>ajouter un produit</a>";
$contenu=ob_get_clean();
include "layout.php";
