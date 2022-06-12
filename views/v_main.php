<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Verti by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
		<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />

		<script src="assets/js/jquery.min.js"></script>
		
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">


			<!-- Banner -->

				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							
							<div class="col-4 col-12-medium">
								<h2>Bienvenue !</h2>
								<p style="font-size:30px;">Développez votre passion </br>pour la musique</p>
							</div>
							<div class="col-3 col-12-medium">
								<img class="set-img" src="images/teacher.gif" alt="" />
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									
									<li><a href="index.php?action=course" class="button large icon solid fa-arrow-circle-right">Cours</a></li>
									<?php
                                                if($userData['rank'] == 'none') {
                                                    echo "<li><a href='index.php?action=inscriptionSite' class='button large alt icon solid fas fa-edit'>Inscriptions</a></li>";
                                                } elseif ($userData['membre'] == 'user') {
													echo "<li><a href='index.php?action=userCourses' class='button large alt icon solid fas fa-book'>Mes Cours</a></li>";
												} elseif ($userData['rank'] == 'admin') {
													echo "<li><a href='index.php?action=admin' class='button large alt icon solid fas fa-server'>Administration</a></li>";
												}
                                            ?>
											
								</ul>
							</div>
						</div>
					</div>
				</div>


			<!-- Features -->
				<div id="features-wrapper" style="margin-top:4em;">
					<div class="container">
						<div class="chibiTitre">
							Virtuoz, le tout premier conservatoire à proposer vos cours en ligne !
						</div>
						
						<div class="row">
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/basse3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Basse</a></h2>
											</header>
										</div>
									</section>

							</div>
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/batterie3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Batterie</a></h2>
											</header>
										</div>
									</section>

							</div>
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/guitare3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Guitare</a></h2>
											</header>
									</section>

							</div>
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/keytar3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Keytar</a></h2>
											</header>
										</div>
									</section>

							</div>
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/piano3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Piano</a></h2>
											</header>
										</div>
									</section>

							</div>
							<div class="col-2 col-12-medium chibiMain">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/chibis/violon3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2><a href=""><span class="icon solid fa-angle-right"></span> Violon</a></h2>
											</header>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
	</body>
</html>