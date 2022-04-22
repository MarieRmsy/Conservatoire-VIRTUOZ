
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

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											
										<a href="index.php?action=logout" class="button deconnect icon solid fa-sign-out-alt">Se déconnecter</a>
										</section>
<!-- 
										<h3>Subheading</h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
											consequat etiam.</p> -->

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>