<?php 

include("data/articles.php");

$thisArticle = "";
$id = $_GET['id'];

foreach ($articles as $article) {
	if ($id == $article["id"]) {
		$thisArticle = $article;
	}
}

?>

<section>
	<inner-column>
		
		<h1 class="loud-voice"><?=$thisArticle["heading"]?></h1>
		<p class="loud-voice"><?=$thisArticle["description"]?></p>
		<picture>
			<img src='<?=$thisArticle["thumbnail"]?>' alt='$todo'>
		</picture>

	</inner-column>
</section>