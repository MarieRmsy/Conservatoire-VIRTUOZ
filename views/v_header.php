<html>
	<head>
		<title>Virtuoz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/perso.css" />
		<link rel="stylesheet" href="./modules/weavy/weavy.css"/>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"> </script>

	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">
			
			<!-- Header -->
			<div id="header-wrapper">
					<header id="header" class="container">
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">Virtuoz</a></h1>
								<span class="set-aca">Academy</span>
								<?php include './modules/weavy/weavy.html';?>
								
							</div>

						<!-- Nav -->
							<!-- <div style="background-color:red !important"> -->
								<nav id="nav">
									<ul>
										<li class='target' id='target1'><a href="index.php?action=main">Accueil</a></li>
										<li class='target' id='target2'>
											<a href="index.php?action=course">Cours</a>
											<ul>
												<li><a href="#">Piano</a></li>
												<li><a href="#">Guitare</a></li>
												<li>
													<a href="#">Trompette</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Phasellus consequat</a></li>
														<li><a href="#">Magna phasellus</a></li>
														<li><a href="#">Etiam dolore nisl</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class='target' id='target3'><a href="index.php?action=inscription">Espace Membre</a></li>
										

										<!-- <li><a href="right-sidebar.html">Right Sidebar</a></li> -->
									</ul>
									<?php		
                                                if($userData['rank'] == "admin")
                                                {
                                                    echo "<li class='target' id='target3'><a href='index.php?action=inscription'>Liste de toutes les inscriptions</a></li>";
                                                }
                                                else if($userData['rank'] == "user")
                                                {
                                                    echo "<div style='background-color: red; color: white; font-weight: bold;'>God mod desactivated</div>";
                                                }
                                            ?>
								</nav>
							<!-- </div> -->

					</header>
		</div>
</div>

<script src="./modules/weavy/weavy.js" type="text/javascript"></script>


	</body>