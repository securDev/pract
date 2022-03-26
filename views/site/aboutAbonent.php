<h1>aboutAbonent</h1>

<ol>
   <?php
   foreach ($abonents as $abonent) {
       echo '<li>' . $abonent->name . '</li>';
   }
   ?>
</ol>