<html>
	<head>
		<title>Virtuoz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/perso.css" />
		<link rel="stylesheet" href="assets/notes/notes.css" />
		<link rel="stylesheet" href="assets/weavy/weavy.css"/>
		<link rel="stylesheet" href="./modules/modal/modal.css"/>
		<link rel="icon" type="image/png" href="images/virtuozIcon.png"/>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"> </script>

	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">
			
			<!-- Header -->
			<div id="header-wrapper">
			
			<?php include 'assets/notes/notes.html';?>
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
											<!-- <ul>
												<li><a href="#">Piano</a></li>
												<li><a href="#">Guitare</a></li>
												<li><a href="#">Trompette</a></li>
											</ul> -->
										</li>
										
										<?php	
                                                
												if($userData['rank'] == 'none') // IF NO CONNECTED
												{
													echo "<li><a href='index.php?action=connexion'>Connexion</a></li>
													<li><a href='index.php?action=inscriptionSite'>Inscription</a></li>";
												}
												else // IF CONNECTED
                                                {
													
													if($userData['rank'] == "admin") // IF ADMIN
													{
														echo "
														<li class='target' id='target3'>
														<a href='index.php?action=admin'>Administration</a>
															<ul>
																<li><a href='index.php?action=adminCourses'>Gestion des cours</a></li>
																<li><a href='index.php?action=adminInscriptions'>Liste des inscriptions</a></li>
																<li><a href='index.php?action=adminUsers'>Liste des membres</a></li>
																
															</ul>
														</li>
														";
													}
													else if($userData['rank'] == "user") // IF USER
													{
														echo "<li><a href='index.php?action=userCourses'>Mes cours</a></li>";

													}
													// FOR ALL CONNECTED
                                                    echo "
														<li class='target' id='target4'>
														<a href='index.php?action=user'>Mon compte</a>
															<ul>
																<li><a href='index.php?action=logout' style='color:#be3f3f'>Déconnexion</a></li>
															</ul>
															</li>
															";
                                                }
                                            ?>
									</ul>
									
								</nav>
							<!-- </div> -->

					</header>
		</div>
</div>

<script src="assets/weavy/weavy.js" type="text/javascript"></script>
<script  src="assets/notes/scriptNotes.js"></script>

	</body>