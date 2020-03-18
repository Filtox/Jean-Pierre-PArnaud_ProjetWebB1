<?php
require_once '../includes/functions.php';

$page = 'signin';
if ( isset( $_GET[ 'page' ] ) ) {
  $page = $_GET[ 'page' ];
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
<?= getTitle($page) ?>
</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-grid.css">
<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../css/bootstrap-reboot.css">
<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/signin.css">
<link rel="shortcut icon" href="../favicon.png">
</head>
<body>
<div class="main-w3layouts wrapper">
	<h1>Formulaire d'inscription</h1>
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form action="#" method="post">
        <input class="text" type="text" name="Username" placeholder="Identifiant" required="">
        <input class="text email" type="email" name="email" placeholder="Email" required="">
        <input class="text" type="password" name="password" placeholder="Mot de passe" required="">
        <input class="text w3lpass" type="password" name="password" placeholder="Confirmer mot de passe" required="">
        <div class="wthree-text">
          <label class="anim">
            <input type="checkbox" class="checkbox" required="">
            <span>J'accepte les termes et conditions</span> </label>
          <div class="clear"> </div>
        </div>
        <input type="submit" value="S'INSCRIRE">
      </form>
      <p>Déjà un compte ?<a href="#"> Se connecter</a></p>
    </div>
  </div>
	<!--
  <ul class="colorlib-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
-->
</div>
</body>
</html>