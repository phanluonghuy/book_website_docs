<!--start book card-->
<div class="book-card-full" style="max-width: 800px; min-height: 1200px;">
	
	<h2 class="card-title"><?=esc($row['name'])?></h2>

	<div style="overflow: hidden;">
		<img src="<?=ROOT?>/<?=$row['image']?>">
	</div>
	<div class="card-content">
		<div><?=esc($row['bio'])?></div>

		<div>Artist books:</div>
		<div style="display: flex;flex-wrap: wrap;justify-content: center;">
			<?php 

				$query ="select * from books where artist_id = :artist_id order by views desc limit 20";
				$books = db_query($query,['artist_id'=>$row['id']]);

			?>

			<?php if(!empty($books)):?>
				<?php foreach($books as $row):?>
					<?php include page('includes/book')?>
				<?php endforeach;?>
			<?php endif;?>
		</div>
	</div>
</div>
<!--end book card-->