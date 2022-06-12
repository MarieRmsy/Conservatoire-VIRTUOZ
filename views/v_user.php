
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
                                                    echo "<span class='adminUser icon solid fa-chevron-right'> Administrateur</span>
													<span style='color: #be3f3f; font-size: 30px; ' class='icon solid fas fa-user-shield'></span>";
                                                }
                                                if($userData['rank'] == "membre")
                                                {
                                                    echo "<span class='memberUser icon solid fa-chevron-right'> Adhérent</span>
													<span style='color: #71c771;; font-size: 30px; ' class='icon solid fas fa-user-graduate'></span>";
                                                }
                                            ?>
											
											</h2>



										</article>
										<article>
										

									<h3> <i class="fas fa-home"></i> Adresse : <span class="userInfo"><?= $userData[4]; ?></span></h3>
									<h3> <i class="fas fa-envelope"></i> Email : <span class="userInfo"><?= $userData[5]; ?></span></h3>
									<h3> <i class="fas fa-phone-alt"></i> Numéro de téléphone : <span class="userInfo"><?= $userData[3]; ?></span></h3>
									<h3> <i class="fas fa-music"></i> Votre niveau : <span class="userInfo"><?= $userData[5]; ?></span></h3>
									
								</article>

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											
										<a href="index.php?action=logout" class="button deconnect icon solid fa-sign-out-alt">Se déconnecter</a>
										
										<img style="width: 80%; margin-top: 3em;" src="images/chibis/group1.png" alt="" />
									</section>

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>