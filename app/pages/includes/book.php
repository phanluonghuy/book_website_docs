<!--start book card-->
<div class="book-card">
	<div style="overflow: hidden;">
		<a href="<?=ROOT?>/song/<?=$row['slug']?>"><img src="<?=ROOT?>/<?=$row['image']?>"></a>
	</div>
	<div class="card-content">
		<div class="card-title"><?=esc($row['title'])?></div>
		<div class="card-subtitle"><?=esc(get_artist($row['artist_id']))?></div>
		<div class="card-subtitle" style="font-size: 12px;">Category: <?=esc(get_category($row['category_id']))?></div>
		<div class="rating">
		<span class="star" data-value="<?=$row['id']?>_1">&#9733;</span>
		<span class="star" data-value="<?=$row['id']?>_2">&#9733;</span>
		<span class="star" data-value="<?=$row['id']?>_3">&#9733;</span>
		<span class="star" data-value="<?=$row['id']?>_4">&#9733;</span>
		<span class="star" data-value="<?=$row['id']?>_5">&#9733;</span>
	</div>
	<div class="rating-value"></div>
	</div>
</div>

<script src="assets/js/menu-popper.js"></script> 
<!--end book card-->