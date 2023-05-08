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
				alert(data.includes("Delete to library succesful") ? "Delete success" : "You haven't already added this book.");
			}); 
		<?php else: ?>
			$.post("","button1=123",(data)=>{
				alert(data.includes("Add to library succesful") ? "Add success" : "You have already added this book.");
			});
		<?php endif; ?>
		
	}
</script>
<!--start book card-->

<div class="book-card-full" style="max-width: 800px;">
	
	<h2 class="card-title"><?=esc($row['title'])?></h2>
	<div class="card-subtitle">by: <?=esc(get_artist($row['artist_id']))?></div>

	<div class="card-content">

		<embed src="<?=ROOT?>/<?=$row['file']?>" width="800px" height="1050px" />

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