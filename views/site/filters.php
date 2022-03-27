<nav class="action">
	<h1>Filters</h1>
	<div class="line"></div>
    <?php if (app()->auth::check()): ?>
    	<a href="<?= app()->route->getUrl('/countabonent') ?>">Комнаты</a>
    	<a href="<?= app()->route->getUrl('/addsubvision') ?>">Подразделения</a>

    <?php endif ?>
</nav> 