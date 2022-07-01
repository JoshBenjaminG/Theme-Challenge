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
	.error {
		color: red;
	}
	.success {
		color: green;
	}
</style>

<?php 

$message = "";
$submit = "";

if (isset($_POST['add'])) {
	if ($_POST['heading'] && $_POST['description']) {
		$message = "Added";
		$submit = "success";
	} else {
		$message = "Invalid";
		$submit = "error";
	}
}

?>

<section class="create-section">

<h1>The Create Page</h1>


<form method="POST" class="create">
	<field>

		<?php if (!$_POST['heading']) { ?>
			<p class="calm-voice error">Add Heading</p>
		<?php } ?>

		<label>Heading</label>
		<input type="string" name="heading" placeholder="A premium heading">
	</field>

	<field>

		<?php if (!$_POST['description']) { ?>
			<p class="calm-voice error">Add Description</p>
		<?php } ?>

		<label>Description</label>
		<input type="string" name="description" placeholder="A fantastic description">
	</field>

	<field>
		<label>Thumbnail</label>
		<input type="file" name="Thumbnail">
	</field>

	<button type="submit" name="add">Add</button>
</form>

<h1 class="loud-voice <?=$submit?>"><?=$message?></h1>

</section>