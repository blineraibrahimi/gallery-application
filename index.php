<?php
	include_once('header.php');
?>
<div class="Lorem1">
	<div class="arts-container">
		<div class="comment-form">
			<h3 class="username">Leonardo da Vinci</h3>
			<img class="picture" src="images/mona-lisa.jpg">
		</div>
	</div>
	<div class="arts-container">
		<div class="comment-form">
			<h3 class="username">Georges Seurat</h3>
			<img class="picture" src="images/Sunday_Afternoon.jpg">
		</div> 
	</div>
	<div class="arts-container">
		<div class="comment-form">
			<h3 class="username">Vincent van Gogh</h3>
			<img class="picture" src="images/starry_night_full.jpg">
		</div>
	</div>
	<div class="arts-container">
		<div class="comment-form1">
			<h3 class="username">Katsushika Hokusai</h3>
			<img class="picture" src="images/330px-Great_Wave_off_Kanagawa2.jpg">
		</div>
	</div>
	<div class="arts-container">
		<div class="comment-form">
			<h3 class="username">Edvard Munch</h3>
			<img class="picture" src="images/the-scream.jpg">
		</div>
	</div>
	<div class="arts-container">
		<div class="comment-form2">
			<h3 class="username">Johannes Vermeer</h3>
			<img class="picture" src="images/Meisje_met_de_parel.jpg">
		</div>
	</div>
	<div class="arts-container">
		<div class="comment-form3">
			<h3 class="username">John Constable</h3>
			<img class="picture" src="images/famous-landscape-paintings-5-1536x864.jpg">
		</div>
	</div>
</div>
	<div class="comment-container">
		<form class="comment-area" action="database config/Post Comment.php" method="POST">
			<input class="comment-input" type="text" name="Comment" placeholder="Comment">
			<button class="post-comment-button" type="submit" name="submit-comment"> Post</button>
		</form>
	</div>
	<div>
		<div class="comment-div">
			<?php
				include_once('database config/config.php');
				$sql = "SELECT * FROM comment";
				$getComments = $connection -> prepare($sql);
				$getComments -> execute();
				$comments = $getComments -> fetchALL();
			?>
			<!-- <h3 class="show-comments" id="show-comments">Show Comments</h3> -->
			<table class="comment-table">
			<thead>
				<th><h3>Comments:</h3></th>	
			</thead>
			<tbody>
				<?php
					foreach ($comments as $comment) {
						?>
						<tr>
							<td><?=$comment['Comment'] ?></td>
						</tr>
			<?php 
				}
			?>
		</div>
	</div>

<?php
	// include_once('footer.php');
?>
