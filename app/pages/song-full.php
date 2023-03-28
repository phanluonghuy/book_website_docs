<?php 
	db_query("update books set views = views + 1 where id = :id limit 1",['id'=>$row['id']]);
	
	if(array_key_exists('button1', $_POST)) {
		if($_SESSION['action'] == "insert") Add_library($row['id']);
		if($_SESSION['action'] == "delete") Delete_library($row['id']);
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	 function run(){
		<?php if ($_SESSION['action']=="delete"): ?>
			$.post("","button1=123",(data)=>{// best english
				alert(data.includes("Delete to library succesful") ? "Delete success" : "You aren't aready add this book");
			}); 
		<?php else: ?>
			$.post("","button1=123",(data)=>{
				alert(data.includes("Add to library succesful") ? "Add success" : "You are aready add this book");
			});
		<?php endif; ?>
		
	}
</script>
<!--start book card-->

<div class="book-card-full" style="max-width: 800px;">
	
	<h2 class="card-title"><?=esc($row['title'])?></h2>
	<div class="card-subtitle">by: <?=esc(get_artist($row['artist_id']))?></div>

	<!-- <div style="overflow: hidden;">
		<a href="<?=ROOT?>/song/<?=$row['slug']?>"><img src="<?=ROOT?>/<?=$row['image']?>"></a>
	</div> -->
	<div class="card-content">
		<!-- <audio controls style="width: 100%">
			<source src="<?=ROOT?>/<?=$row['file']?>" type="audio/mpeg">
		</audio> -->
		<embed src="<?=ROOT?>/<?=$row['file']?>" width="800px" height="2100px" />

		<div>Views: <?=$row['views']?></div>
		<div>Date added: <?=get_date($row['date'])?></div>

		<a href="<?=ROOT?>/download/<?=$row['slug']?>">
			<button class="btn bg-purple">Download</button>
		</a>
		
		<?php if ($_SESSION['action']=="delete" && is_login()): ?>
			<a onclick="run()">
			<button class="btn bg-purple">Delete to my library</button>
			</a> 
		<?php elseif (is_login()): ?>
			<a onclick="run()">
			<button class="btn bg-purple">Add to my library</button>
			</a> 
		<?php endif; ?>
		

	</div>
</div>
<!--end book card-->