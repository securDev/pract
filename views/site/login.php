


<div class="block-head">
    <h2 class="center-head">Auth</h2>
</div>









<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <h2 class="center-head">Login</h2>
   <form style="display: flex; flex-direction: column;" class="form-login" method="post">
       <label class="input"><input type="text" name="login"></label>
       <label class="input"><input type="password" name="password"></label>
       <button>Войти</button>
   </form>

   <h3><?= $message ?? ''; ?></h3>
<?php endif;
