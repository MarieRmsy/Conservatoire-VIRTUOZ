
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
														<th>Attestation</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach ($getInscriptions as $item) :?>
													
													<tr class="item_row">
															<td> <?= $item['nom']; echo "&nbsp;"; echo $item['prenom']; ?></td>
															<td> <?= $item['date']; ?></td>
															<td> <?= $item['instruNom']; ?></td>
															<td> <?= $item['profNom']; echo "&nbsp;"; echo $item['profPrenom']; ?></td>
															<!-- <td><a href="./pdf/pdfInscription.php">pdf</a></td> -->
															<td> <?= "<a href=\"./pdf/pdfInscription.php?idAdh=".$item['idAdh']."&idCours=".$item['idCours']."\" target='blank_'>PDF</a>" ?></td>
															
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>

								</article>

						</div>
					</div>
				</div>

			</div>