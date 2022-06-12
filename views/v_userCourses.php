
		<div id="page-wrapper">

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>

									<h2>Mes inscriptions à mes cours <span class="icon solid fas fa-book"></span></h2>

											<table>
												<thead>
													<tr>
														<th>Adhérent</th>
														<th>Cours</th>
														<th>Instrument</th>
														<th>Professeur</th>
														<th>Billet</th>
														<th>Supprimer</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach ($getInscriptions as $item) :?>
													
													<tr class="item_row">
															<td> <?php echo $item['nom']; echo "&nbsp;"; echo $item['prenom']; ?></td>
															<td> <?php echo $item['horaires']; ?></td>
															<td> <?php echo $item['instruNom']; ?></td>
															<td> <?php echo $item['profNom']; echo "&nbsp;"; echo $item['profPrenom']; ?></td>
															<td><a href="./test/test_pdf_1.php">pdf</a></td>
															<td>Supprimer</td>
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>

								</article>

						</div>
					</div>
				</div>

			</div>