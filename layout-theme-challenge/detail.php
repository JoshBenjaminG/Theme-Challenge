<?php 

include('data/articles.php');

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
		
		<h1><?=$thisArticle["heading"]?></h1>
		<h1><?=$thisArticle["description"]?></h1>
		<picture>
			<img src='<?=$thisArticle["thumbnail"]?>' alt='$todo'>
		</picture>

	</inner-column>
</section>