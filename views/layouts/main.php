<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/css/style.css">
   <title>Сommunication center</title>
</head>
<body>
   <style type="text/css">
      * {
         margin: 0;
         padding: 0;
      }
      body {
         display: flex;
         flex-direction: column;
      }

      .main-menu {
         display: flex;
         margin-right: 80px;
         align-items: center;
      }
      .main-menu a {
         display: flex;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         color: black;
         margin-left: 30px;
         width: 150px;
         height: 35px;
         background-color: rgba(118, 115, 115, 1);
         border: 1px solid black;
         border-radius: 25px;

      }
      .head-block {
         display: flex;
         width: 100%;
         height: 150px;
         background-color: #E7E7E7;
         justify-content: space-between;
         
      }
      .head {
         display: flex;
         margin-left: 80px;
         align-items: center;
      }
      .form-block {
         margin-top: 100px;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: column;
      }
      .form {
         display: flex;
         flex-direction: column;
      }
      .input {
         margin: 20px;
         height: 35px;
         width: 200px;
         background-color: rgba(196, 196, 196, 1);
         border-radius: 25px;
         border: 1px solid rgba(0, 0, 0, 1);
         padding: 0 15px 0 15px;
      }
      button {
         margin: 20px;
         width: 70px;
         height: 30px;
         border: 1px solid rgba(0, 0, 0, 1);
         border-radius: 25px;
      }
      button:hover {
         cursor: pointer;
         background-color: rgba(127, 106, 255, 1);
      }
      .action {
         width: 200px;
         display: flex;
         flex-direction: column;
         margin-left: 80px;
         margin-top: 80px;
         margin-right: 300px;
      }
      .action a {
         margin: 12px 0 12px 0;
         display: flex;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         color: black;
         width: 200px;
         height: 35px;
         background-color: rgba(233, 233, 233, 1);
         border: 1px solid black;
         border-radius: 25px;
      }
      .line {
         width: 200px;
         border: 1px solid black;
         margin: 12px 0 25px 0;
      }
      .e {
         display: flex;

      }
      .a-f {
         display: flex;
      }
      .a-f nav {
         margin-right: 0;
      }
   </style>
<header>

   <div class="head-block">
      <h1 class="head"><?= $message ?? ''; ?></h1>

      <nav class="main-menu">
         <?php
          if (app()->auth::check()):   ?>
             <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
             <?php
             if (!app()->auth::check()):
                 ?>
                 <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                 <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
             <?php
             else:
                 ?>
                 <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
             <?php
             endif;
             ?>
             <?php
             endif;
             ?>

      </nav> 

   </div>

  
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>

