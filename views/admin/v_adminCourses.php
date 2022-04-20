
		<div id="page-wrapper">			
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>
												Gestion des cours
												<span>
													<a href="#" id="slide-down-btn-AddCours" style="font-size: 0.6em;font-weight:bold;" class="button icon solid fa-mouse-pointer">Ajouter un cours</a>
												</span>
												
											</h2>

											<table>
												<thead>
													<tr>
														<th>Numéro</th>
														<th>Date</th>
														<th>Instrument</th>
														<th>Places</th>
														<th>Professeur</th>
														<th>Rejoindre</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach ($getCours as $cours) :?>
													
													<tr class="item_row rowid-<?php echo $cours[0]; ?>">
															<td> <?php echo $cours[0]; ?></td>
															<td> <?php echo $cours[1]; ?></td>
															<td> <?php echo $cours[9]; ?></td>
															<td> <?php echo $cours[2]; ?></td>
															<td> <?php echo $cours[6]; echo "&nbsp;"; echo $cours[7]; ?></td>
															<td><button class="slide-down-btn-Delete<?= $cours[0]; ?>" style="font-size: 75%;">Supprimer</button>
															<!-- DEL MODAL -->
															<div id="slide-down-modal-Delete<?= $cours[0]; ?>" class="modal tl">
																	<div class="content">
																		<h3>Êtes-vous sûre de vouloir supprimer ce cours ?</h3>
																		<hr>
																		<?= $cours[0]; ?>
																		</br>
																		
																		<button id="InscriptionOK" class="button icon solid fa-check-circle deleteCours" attr-idcours="<?= $cours[0]; ?>">Oui, supprimer</button>
																		<button id="slide-down-close-Delete2<?= $cours[0]; ?>" class="button icon fa-times-circle">Non, annuler</button>

																	</div>
																				
																	<span id="slide-down-close-Delete<?= $cours[0]; ?>" class="close">&times;</span>
															</div>

															<script>
															// DELETE
															$(document).ready(function(){

															// Slide down effect starts here
															$('.slide-down-btn-Delete<?= $cours[0]; ?>').click( function()
																{
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").slideDown('slow/400/fast', function() {
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").css("display", "block");  	
																});
																}
															);

															$("#slide-down-close-Delete<?= $cours[0]; ?>").click( function()
																{
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").slideUp('slow/400/fast', function() {
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").css("display", "none");  	
																});
																}
															);

															$("#slide-down-close-Delete2<?= $cours[0]; ?>").click( function()
																{
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").slideUp('slow/400/fast', function() {
																$("#slide-down-modal-Delete<?= $cours[0]; ?>").css("display", "none");  	
																});
																}
															);

															});
															</script>

															</td>
															<!-- <td><button id="slide-down-btn-Delete" style="font-size: 75%;" class="deleteCours">Supprimer</button></td> -->
															
															
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>
											
										</article>

										<!-- JQuery -->
										<script type="text/javascript">
											$('.deleteCours').on('click', function(e){
												e.preventDefault();
												var idcours = $(this).attr('attr-idcours');
												$.ajax({
													url : "ajax.php",
													data: 'do=deleteCours&idcours='+idcours,
													method: 'POST'
												})
												.done(function(reponse, data){
													if(reponse.state == 'success')
													{
														$('.rowid-'+idcours).remove();
													}
													else
													{
														alert('Le cours ne peut pas être supprimé');
													}
												});
											});
										</script>
										<!-- /JQuery -->

								</div>
							</div>

							<div id="slide-down-modal-AddCours" class="modal tl">
								<div class="content">
									<h2>Ajouter un cours</h2>
									<hr>
									</br>
									<div id="feedbackAdd" style="display:none;font-weight:bold;"></div>
									<form id="addCoursForm">
											<input id="formHorairesAddCours" name="formHorairesAddCours" type="text" placeholder="Lundi 17h"><br/>
											<input id="formNbplacesAddCours" name="formNbplacesAddCours" type="number" placeholder="Nombre de places"><br>
											<select id="formProfAddCours" name="formProfAddCours">
												<?php
													foreach($getProf as $item)
													{
														echo "<option value='".$item['profId']."'>".$item['profPrenom']." ".$item['profNom']."</option>";
													}
												?>
											</select>
											<select id="formInstruAddCours" name="formInstruAddCours">
												<?php
													foreach($getInstru as $item)
													{
														echo "<option value='".$item['instruId']."'>".$item['instruNom']."</option>";
													}
												?>
											</select>
											<input type="hidden" name="do" value="addCours">
											<button type="submit">Ajouter</button>
									</form>
								</div>

								<script type="text/javascript">
									$('#addCoursForm').on('submit', function(e){
										e.preventDefault();
										console.log($(this).serialize());
										$('#feedbackAdd').css('display','none');

										$.ajax({
											url: 'ajax.php',
											data: $(this).serialize(),
											method: "POST"
										})
										.done(function(reponse, data)
										{
											console.log(reponse);
											if(reponse.state == "success")
											{
												$('#feedbackAdd').text('Ajout du cours avec succès');
												$('#feedbackAdd').css('display','block');
											}
											else
											{
												$('#feedbackAdd').text('Erreur lors de l\'ajout du cours');
												$('#feedbackAdd').css('display','block');
											}
										})

									})
								</script>
											
								<span id="slide-down-close-AddCours" class="close">&times;</span>
							</div>

						</div>
					</div>
				</div>
		</div>
		<script>
		// ADD COURS
		$(document).ready(function(){

		// Slide down effect starts here
		$("#slide-down-btn-AddCours").click( function()
			{
			$("#slide-down-modal-AddCours").slideDown('slow/400/fast', function() {
			$("#slide-down-modal-AddCours").css("display", "block");  	
			});
			}
		);

		$("#slide-down-close-AddCours").click( function()
			{
			$("#slide-down-modal-AddCours").slideUp('slow/400/fast', function() {
			$("#slide-down-modal-AddCours").css("display", "none");  	
			});
			}
		);

		});
