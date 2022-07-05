<?php 

include("functions.php");

$thisArticle = "";
$id = $_GET['id'];
$button = $_POST['delete'];

foreach (getArticles() as $key => $value) {
	if ($id == $key) {
		$thisArticle = $value;
	}
}

if (isset($button)) {
	deleteRecord($key);
	echo "This article has been deleted.";
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

<form method="POST">
	<button type="submit" name="delete">delete article</button>
</form>