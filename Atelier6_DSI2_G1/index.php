<?php
ob_start();

echo "<h1>Liste des produits</h1>";
echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Officiis animi ad voluptatum quibusdam nulla veritatis eius aliquid,
natus cum autem? Illo commodi veniam aperiam dolor praesentium cupiditate,
porro laboriosam vel!";
$contenu = ob_get_clean();
include "layout.php";
?>
