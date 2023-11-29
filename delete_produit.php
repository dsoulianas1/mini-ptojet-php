<?php
require_once "config/connexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produit WHERE id = ?";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$id]);
    header("location: produit.php?etat=1");
    exit();
}
