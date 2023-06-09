<?php require page('includes/header')?>

	<section class="content-book-card">
		<?php 
			$limit = 20;
			$offset = ($page - 1) * $limit;
			$_SESSION['action'] = 'insert';
			$rows = db_query("select * from books order by views desc limit $limit offset $offset");
		?>

		<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
				<?php include page('includes/book')?>
			<?php endforeach;?>
		<?php endif;?>

	</section>

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