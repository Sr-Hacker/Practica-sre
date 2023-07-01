<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/main/logins.css">
  <title>Document</title>
</head>
<body>
  <? require 'view/components/layout/header.php'; ?>
  <section class="paralax" style="background: rgba(200, 11, 11, 0.851);">
    <div class="paralax_title" id="text">
      <h2>Iniciar sesion</h2>
      <div class="container_login">
        <form action="post">
          <label for="email"></label>
          <input type="text" placeholder="Correo">
          <label for="password"></label>
          <input type="password" placeholder="contrasena">
        </form>
        <p>Aun no tienes una cuenta registrada?
          <a
            href="<?php echo constant('URL');?>register">Registrate aqui</a>
        </p>
      </div>
    </div>
    <!-- <img src="<? echo constant('URL');?>public/img/hill1.png" id="hill1" alt="hill1">
    <img src="<? echo constant('URL');?>public/img/hill2.png" id="hill2" alt="hill2">
    <img src="<? echo constant('URL');?>public/img/hill3.png" id="hill3" alt="hill3">
    <img src="<? echo constant('URL');?>public/img/hill4.png" id="hill4" alt="hill4">
    <img src="<? echo constant('URL');?>public/img/hill5.png" id="hill5" alt="hill5">
    <img src="<? echo constant('URL');?>public/img/leaf.png" id="leaf" alt="leaf">
    <img src="<? echo constant('URL');?>public/img/plant.png" id="plant" alt="plant">
    <img src="<? echo constant('URL');?>public/img/tree.png" id="tree" alt="tree"> -->
  </section>
</body>
</html>
