<?php require page('includes/header')?>
	
	<section class="content">
		
		<?php 
			$slug = $URL[1] ?? null;
			$query = "select * from books where slug = :slug limit 1";
			$row = db_query_one($query,['slug'=>$slug]);
		?>
		<?php if(!empty($row)):?>
			<?php include page('books-full')?>
		<?php endif;?>

	</section>

<?php require page('includes/footer')?>