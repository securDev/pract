<div class="action">
	<h1>Filters</h1>
	<div class="line"></div>
    <?php if (app()->auth::check()): ?>

		<form class="form" method="post">

			<select name="room"  class="input" required="required">

				<option class="input" value="">Комната</option>
				<option class="input" value="1">Основная</option>
				<option class="input" value="2">Вторая</option>

			</select>
			<select name="subvision" class="input" required="required">

				<option class="input" value="">Подразделение</option>
				<option class="input" value="1">Основное</option>
				<option class="input" value="2">Второе</option>

			</select>

            <button>Считать</button>

       </form>



    <?php endif ?>
</div> 