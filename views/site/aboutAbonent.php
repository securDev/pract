<div style="display: flex;">
<?php include "hello.php" ?>
<div style=" margin-top: 62px;">
   <div class="header-ab-block">
      <h1>Abonents</h1>
      <input class="input" type="text" name="search" placeholder="Search">
   </div>
   <div class="line-ab"></div>
   <div class='list-item'><h4>Фамилия</h4><h4>Имя</h4><h4>Отчество</h4><h4>Оператор</h4><h4>Дата рождения</h4><h4>Подразделение</h4></div>
<ol>
   <?php
   foreach ($abonents as $abonent) 
   {
      echo "<div class='list-item'>" 
      . "<h4>" . $abonent->surname            . "</h4>"
      . "<h4>" . $abonent->name               . "</h4>"
      . "<h4>" . $abonent->lastname           . "</h4>"
      . "<h4>" . $abonent->operator           . "</h4>"
      . "<h4>" . $abonent->date_of_bearth     . "</h4>"
      . "<h4>" . $abonent->subvision          . "</h4>"
      . "</div>";
   }
   ?>
</ol>
</div>
</div>