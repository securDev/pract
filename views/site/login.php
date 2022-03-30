
<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
    <h3><?= $error ?? ''; ?></h3>
    <div class="form-block">
       <h2 class="form-head">Login</h2>
       <form class="form" method="post">
           <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
           <label><input class="input" type="text" name="login"></label>
           <label><input class="input" type="password" name="password"></label>
           <div class="auth-but">
              <a href="#">Регистрация</a>
              <button>Войти</button>
           </div>
       </form>
    </div>
   <h3><?= $message ?? ''; ?></h3>

<?php endif;
