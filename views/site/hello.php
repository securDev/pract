
<div class="action">
	<h1>Action</h1>
	<div class="line"></div>
    <?php if (app()->auth::check()): ?>
    	<a href="<?= app()->route->getUrl('/countabonent') ?>">Кол-во абонентов</a>
    	<a href="<?= app()->route->getUrl('/addsubvision') ?>">Добавить подразделение</a>
    	<a href="<?= app()->route->getUrl('/addroom') ?>">Добавить комнату</a>
    	<a href="<?= app()->route->getUrl('/aboutabonent') ?>">Инфа о абонентах</a>
    <?php endif ?>
</div> 