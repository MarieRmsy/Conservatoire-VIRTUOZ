
		<div id="page-wrapper">			<!-- Main -->
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Bonjour <?= htmlentities($userData['prenom']); ?> <?= htmlentities($userData['nom']); ?>
                                            
											
											<?php
                                                if($userData['rank'] == "admin")
                                                {
                                                    echo "<span class='adminUser icon solid fa-chevron-right'> Administrateur</span>";
                                                }
                                                if($userData['rank'] == "user")
                                                {
                                                    echo "<span class='memberUser icon solid fa-chevron-right'> Adhérent</span>";
                                                }
                                            ?>
											</h2>



										</article>
										<article>
										

									<h3>Adresse : <span class="userInfo"><?= $userData[4]; ?></span></h3>
									<h3>Email : <span class="userInfo"><?= $userData[5]; ?></span></h3>
									<h3>Numéro de téléphone : <span class="userInfo"><?= $userData[3]; ?></span></h3>
									<h3>Votre niveau : <span class="userInfo"><?= $userData[5]; ?></span></h3>
									
								</article>

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											
										<a href="index.php?action=logout" class="button deconnect icon solid fa-sign-out-alt">Se déconnecter</a>
										</section>

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>