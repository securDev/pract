


<!-- <div>
    <h2 >Auth</h2>
</div> -->









<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
    <div class="form-block">
       <h2 class="form-head">Login</h2>
       <form class="form" method="post">
           <label><input class="input" type="text" name="login"></label>
           <label><input class="input" type="password" name="password"></label>
           <button>Войти</button>
       </form>
    </div>
   <h3><?= $message ?? ''; ?></h3>
<?php endif;
