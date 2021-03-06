<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">	
		<link href="../css/AboutCss.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>Wiki Eats - 	About Us</title>
		
	</head>
	<body>
		<?php include '../includes/wikieatsheader.php' ?>
		<div class="container">
			<div class="row">
				<div class='col-md-12' id='description'>
					<h1>Wiki Eats<small><br/>Git Hungry</small></h1>
					<img src="../images/chef_hat.png" alt="chefHat" width="460" height="345">
					<h2>About Us</h2>
					<p>It's like Wikipedia, but for recipes, where all of our recipes are submitted by users like you!
						Users can also rate their favorite recipes, browse recipes by their favorite categories, and browse recipes of their favorite users.</p>
					<h2>New Features Added</h2>
					<p>We now have social capabilities! Users can now create groups. Groups can be used to connect people or manage recipes for catering. Users can also follow other people.</p>
				</div>

				<div class="col-md-12" id='developers'>
					<h1>Developers</h1>
					<div class="col-md-10 col-md-offset-1" id='developer'>
						<div id="profile">
							<h3>Aploinar Ortega<small><br/>Lead Front-End Devloper</small></h3>
							<div class='col-md-6'>
								<p id="authorsnotes"> "I don't know about business, but recipe #85 is best."</p>
							</div>
							<img class='col-md-6' id="image" src="../images/apple.png">
						</div>
					</div>
						<hr/>
						<br/>
					<div class="col-md-10 col-md-offset-1" id='developer'>
						<div id="profile">
							<h3>Aaron Zhang<small><br/>Lead Back-End Devloper</small></h3>
							<div class='col-md-6'>
								<img id="image" src="../images/yang.png">
							</div>
									
							<p class='col-md-6' id="authorsnotes"> "Truly the best thing in the buisness since sliced bread, and we probably have a recipe for that."</p>
						</div>
					</div>
				</div>

			</div>
		</div> <!-- /container -->
	</body>	
</html>