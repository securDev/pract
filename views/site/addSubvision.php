
<div class="e">
<?php include "hello.php" ?>

<div class="form-block">
   <form class="form" method="post">
      <label><input class="input" type="text" name="name" placeholder="Имя подразделения"></label>
         <select name="type" class="input" required="required">
            <option class="input" value="">Тип подразделения</option>'
            <?php foreach ($subvisions as $key => $subvision) {
               // echo '<option class="input" value="">Тип подразделения</option>';
               echo '<option class="input" value="' . $key + 1 . '">' . $subvision->type . '</option>';

            }?>
            

         </select>

      <button>Добавить</button>
   </form>
</div>
</div>