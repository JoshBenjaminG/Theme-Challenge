<style type="text/css">
	.create-section * {
		padding: 10px;
	}
	.create {
		display: flex;
		flex-direction: column;
	}
	.create button {
		width: 100px;
	}
</style>

<?php 

$message = "";

if (isset($_POST['add'])) {
	$message = "Added";
}

?>

<section class="create-section">

<h1>The Create Page</h1>


<form method="POST" class="create">
	<field>
		<label>Heading</label>
		<input type="string" name="Heading">
	</field>

	<field>
		<label>Description</label>
		<input type="string" name="Description">
	</field>

	<field>
		<label>Thumbnail</label>
		<input type="file" name="Thumbnail">
	</field>

	<button type="submit" name="add">Add</button>
</form>

<h1 class="loud-voice"><?=$message?></h1>

</section>