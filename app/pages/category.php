<?php require page('includes/header')?>
	
	<section class="content">
		
		<?php 
			$category = $URL[1] ?? null;
		    $query = "select * from books where category_id in (select id from categories where category = :category) order by views desc limit 24";
			$rows = db_query($query,['category'=>$category]);

		?>

		<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
				<?php include page('includes/book')?>
			<?php endforeach;?>
		<?php else:?>
			<div class="m-2">No books found</div>
		<?php endif;?>

	</section>

	<section style="min-height: 500px;">

</section>

<?php require page('includes/footer')?>