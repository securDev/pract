



<ol>
   <?php

      foreach ($detecteds as $detected) 
      {
         echo "<div class='list-item'>" 
         . "<h4>" . $detected->surname            . "</h4>"
         . "<h4>" . $detected->name               . "</h4>"
         . "<h4>" . $detected->lastname           . "</h4>"
         . "<h4>" . $detected->operator           . "</h4>"
         . "<h4>" . $detected->date_of_bearth     . "</h4>"
         . "<h4>" . $detected->subvision          . "</h4>"
         . "</div>";
      }

   ?>
</ol>
<div class="line-ab"></div>