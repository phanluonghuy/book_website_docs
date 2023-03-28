<?php require page('includes/header') ?>

<section class="library">
	<div class="container">
		<div class="rounded-box" style="background-color: #f7f7f7; width: 1250px;">
			<img src="<?= ROOT ?>/assets/images/stock.jpg" style="width: 100%; height: 100%; object-fit:cover; object-position: center; border-radius: 10px">
		</div>
	</div>


	<div class="content-book-card">
		<?php
		$rows = db_query("select * from books order by id desc limit 16");
		?>

		<?php if (!empty($rows)) : ?>
			<?php foreach ($rows as $row) : ?>
				<?php include page('includes/book') ?>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="m-2">No books found</div>
		<?php endif; ?>

	</div>

</section>

<section class="library" style="min-height: 200px;">

</section>

<?php require page('includes/footer') ?>