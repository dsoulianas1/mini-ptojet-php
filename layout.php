<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">accuelil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">nos_produi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">nos catégorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">concater nous</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart mx-1"></i>panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user mx-1"></i>créer un compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-sign-in mx-1"></i>connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-sign-out mx-1"></i>deconnexion</a>
        </li>
        </ul>
       
    </div>
  </div>
  
</nav>
<div class="container mt-3">
    <?= $contenu ?>
</div> 
</body>
</html>