<?php require page('includes/header')?>
<style>
    .hero {
    top: 0;
    left: 3.5rem;
    bottom: 0;
    width: 100%; 
    height: 100%; 
    margin-left: 3%;
    object-fit:cover; 
    object-position: center; 
    max-width: fit-content;
    }    
    .info {
        margin-left: 3%;
        flex-direction: 1;
        font-size: large;
    }
    .about {
        display: flex;
        margin-top: 2rem;
        margin-bottom: 3.5rem;
    }
</style>
<main class="about">
    <div class="hero">
		<div class="hero" style="background-color: #f7f7f7; width: 1000px;">
			<img src="<?= ROOT ?>/assets/images/welcome.png">
		</div>
	</div>
    <div class="info">
        <h2>Group Info</h2>
            <li><span>Group</span> : 11</li>
            <li><span>Member</span></li>
            <li><span>Phan Lương Huy </span> - 521H0453</li>
            <li><span>Nguyễn Thành Đạt</span> – 521H0348</li>
            <li><span>Nguyễn Thanh Nguyên</span> – 521H0468</li>
            <li><span>Topic </span> : BOOK LIBRARY WEBSITE </li>
        </ul>
    </div>
</main>	
<?php require page('includes/footer')?>