
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
	$id = $article["id"];
?>

<article class='article-card'>
	<picture>
		<img src='<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='?page=detail&id=<?=$id?>'>Call to action</a>
	</text-content>
</article>
