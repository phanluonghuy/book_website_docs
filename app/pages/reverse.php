<?php require page('includes/header')?>
	
	<div class="section-title">book</div>

	<section class="content">
		
		<?php 
			$limit = 20;
			$offset = ($page - 1) * $limit;
			$userid = getUserID();
			$rows = db_query("select DISTINCT * from books INNER JOIN reserve WHERE books.id = reserve.book_id HAVING reserve.user_id = 3");
			$_SESSION['action'] = 'delete';
		?>

		<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
				<?php include page('includes/book')?>
			<?php endforeach;?>
		<?php endif;?>

	</section>

	<div class="mx-2">
		<a href="<?=ROOT?>/book?page=<?=$prev_page?>">
			<button class="btn bg-orange">Prev</button>
		</a>
		<a href="<?=ROOT?>/book?page=<?=$next_page?>">
			<button class="float-end btn bg-orange">Next</button>
		</a>
	</div>
<?php require page('includes/footer')?>