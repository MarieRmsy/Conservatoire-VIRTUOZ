			<!-- Main -->
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
						<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Cours en ligne <span class="icon solid fas fa-laptop"></span></h2>
											
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
													
													<tr class="item_row">
															<td> <?php echo $cours[0]; ?></td>
															<td> <?php echo $cours[1]; ?></td>
															<td> <?php echo $cours[9]; ?></td>
															<td> <?php echo $cours[2]; ?></td>
															<td> <?php echo $cours[6]; echo "&nbsp;"; echo $cours[7]; ?>
															<?php
																if( isset($_SESSION['user_id']) and $userData['rank'] == "membre"  ){

																	echo "<td id='slide-down-btn-Inscript<?= $cours[0]; ?>'><button style='font-size: 70%;'>S'inscrire</button></td>";

																} elseif( isset($_SESSION['user_id']) and $userData['rank'] == "admin"  ) {

																	echo "<td><button class='disabled' disabled>S'inscrire</button></td>";
																}
																else {
																	
																	echo "<td><div class='myDIV'><button class='popover-link' disabled>S'inscrire</button></div>
																		<div class='hide'>Connectez-vous pour vous inscrire aux cours !</div></td>";
																}
															?>

															<div id="slide-down-modal-Inscript<?= $cours[0]; ?>" class="modal tl">
																	<div class="content">
																		<h3>Confirmez-vous vôtre inscription au cours de ?</h3>
																		<hr>
																			<div class="feedbackAddCours" style="display:none; font-weight:bold;"></div>

																		<?= $cours[0]; ?>
																		</br>

																		<button class="button icon solid fa-check-circle subscribeCours" attr-coursid="<?= $cours[0]; ?>" >Oui</button>
																		<button class="button icon fa-times-circle slide-down-close-Inscript<?= $cours[0]; ?>">Fermer</button>

																	</div>
																	<span class="close slide-down-close-Inscript<?= $cours[0]; ?>">&times;</span>
															</div>

															<script>
															$(document).ready(function(){

															// Slide down effect starts here
															$("#slide-down-btn-Inscript<?= $cours[0]; ?>").click( function()
																{
																$('.feedbackAddCours').css('display','none');
																$("#slide-down-modal-Inscript<?= $cours[0]; ?>").slideDown('slow/400/fast', function() {
																$("#slide-down-modal-Inscript<?= $cours[0]; ?>").css("display", "block");  	
																});
																}
															);

															$(".slide-down-close-Inscript<?= $cours[0]; ?>").click( function()
																{
																$('.feedbackAddCours').css('display','none');
																$("#slide-down-modal-Inscript<?= $cours[0]; ?>").slideUp('slow/400/fast', function() {
																$("#slide-down-modal-Inscript<?= $cours[0]; ?>").css("display", "none");  	
																});
																}
															);

															});
															</script>
															</td>
															
													</tr>
													<?php endforeach;?>

													<script type="text/javascript">
																$('.subscribeCours').on('click',function(e){
																	e.preventDefault();
																	idCours = $(this).attr('attr-coursid');
																	idUser = <?= $userData['id']; ?>;
																	console.log('test1');
																	$('.feedbackAddCours').css('display','none');
																	$.ajax({
																		url : "ajax.php",
																		data : 'do=addRegistration&idUser='+idUser+'&idCours='+idCours,
																		method: 'POST'
																	})
																	.done(function(reponse,data){
																	console.log('test2');

																		if(reponse.state == "success")
																		{
																	console.log('test3');

																			$('.feedbackAddCours').css('display','block');
																			$('.feedbackAddCours').text('Vous avez bien été inscrit au cours');
																		}
																		if(reponse.state == "fail")
																		{
																	console.log('test4');

																			$('.feedbackAddCours').css('display','block');
																			$('.feedbackAddCours').text('Inscription impossible à ce cours');
																		}
																	});

																})


															</script>
												</tbody>
												
											</table>
											
										</article>

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											
											<h3>Horaires d'ouverture</h3>
											<ul>
												<li>Lundi : 8:00-20:00</li>
												<li>Mardi : 8:00-20:00</li>
												<li>Mercredi : 12:00-21:00</li>
												<li>Jeudi : 8:00-18:00</li>
												<li>Vendredi : 8:00-22:00</li>
												<li>Samedi : 7:00-12:00</li>
												<li>Dimanche : Fermé</li>
											</ul>
										</section>

										<section>
											<h3>Fermetures exceptionnelles</h3>
											<p>Le conservatoire est fermé pendant les représentations privées, les vacances scolaires ainsi que les périodes d'examens.</p>

										</section>

								</div>
							</div>
							
						</div>
					</div>
				</div>

				<script>
					$(document).ready(function() {
					$('.popover-parent > .popover-link').click(function() {
					$('.popover-parent > .popover-link').not(this).parent().removeClass('active');
					$(this).parent().toggleClass('active');
					});
																			
					// Hide popover when clicked off
					$('html').click(function() {
					$('.popover-parent.active').removeClass('active');
					});
					// Don't include the popover
					$('.popover, .popover-parent > .popover-link').click(function(e) {
					e.stopPropagation();
					});

					});
				</script>

