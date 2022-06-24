<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>PSSST (CSS)</title>
		<meta name='description' content='PSSST (CSS)'>
		<meta property='og:image' content='A CSS methodology so great, it needed a name.'>

		<link rel='stylesheet' href='styles/site.css'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
	</head>


	<body>
		<header class="site-header">
		<inner-column>
			
			<?php include('modules/mast-head/template.php'); ?>

		</inner-column>	
		</header>

		<main>

			<section class='welcome' id='welcome'>


				<?php include('modules/graphic-diptych/template.php'); ?>

			</section>


			<section class='sign-up' id='sign-up'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>


			<section class='latest' id='latest'>
			<inner-column>

				<?php include('modules/articles-intro/template.php'); ?>

			</inner-column>
			</section>


			<section class='get-involved' id='get-involved'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>

		</main>

		<footer>
		<inner-column>
			
			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
		</footer>
	</body>

</html>