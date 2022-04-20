<html>
	<head>
		<title>Virtuoz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/perso.css" />
		<link rel="stylesheet" href="assets/weavy/weavy.css"/>
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
								<?php include 'assets/weavy/weavy.html';?>
								
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
												<li><a href="#">Trompette</a></li>
											</ul>
										</li>
										
										<?php	
                                                if($userData['rank'] == "admin")
                                                {
                                                    echo "<li class='target' id='target3'><a href='index.php?action=inscription'>Liste de toutes les inscriptions</a></li>";
                                                }
                                                else if($userData['rank'] == "user")
                                                {
                                                    echo "<li class='target' id='target3'><a href='index.php?action=inscription'>Mes cours</a></li>";

                                                } else if($userData['rank'] == 'none')
												{
													echo "<li class='target' id='target3'><a href='index.php?action=connexion'>Connexion</a></li>
													<li class='target' id='target3'><a href='index.php?action=inscription'>Inscription</a></li>";
												}
                                            ?>
									</ul>
									
								</nav>
							<!-- </div> -->

					</header>
		</div>
</div>

<script src="assets/weavy/weavy.js" type="text/javascript"></script>


	</body>