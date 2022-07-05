<?php 

include("functions.php");

$thisArticle = "";
$id = $_GET['id'];

foreach (getArticles() as $key => $value) {
	if ($id == $key) {
		$thisArticle = $value;
	}
}

if ($_POST['delete']) {
	echo "deleted";
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