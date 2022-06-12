
		<div id="page-wrapper">			
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>
											Liste des inscriptions
												<!-- <span>
													<a href="#" id="slide-down-btn-Liste" style="font-size: 0.6em;font-weight:bold;" class="button icon solid fa-mouse-pointer">?</a>
												</span>
												 -->
											</h2>

                                            <table>
												<thead>
													<tr>
														<th>Adhérent</th>
														<th>Cours</th>
														<th>Instrument</th>
														<th>Professeur</th>
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
															<td>Supprimer</td>
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>
											
										</article>

										<?php
											foreach($getInscriptions as $item)
											{
												var_dump($item);
											}
										?>

								</div>
							</div>

							<div id="slide-down-modal-Liste" class="modal tl">
								<div class="content">
									<h2>Liste inscriptions</h2>
									<hr>
									<h3 id="feedbackConnect" style="display:none;color:red;font-weight:bold;">L'identifiant et le mot de passe ne correspondent pas.</h3>
													
								</div>
											
								<span id="slide-down-close-Liste" class="close">&times;</span>
								</div>
						</div>
					</div>
				</div>
		</div>
		<script>
		$(document).ready(function(){

		// Slide down effect starts here
		$("#slide-down-btn-Liste").click( function()
			{
			$("#slide-down-modal-Liste").slideDown('slow/400/fast', function() {
			$("#slide-down-modal-Liste").css("display", "block");  	
			});
			}
		);

		$("#slide-down-close-Liste").click( function()
			{
			$("#slide-down-modal-Liste").slideUp('slow/400/fast', function() {
			$("#slide-down-modal-Liste").css("display", "none");  	
			});
			}
		);

		});
		</script>