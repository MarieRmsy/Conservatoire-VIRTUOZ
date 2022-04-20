			<!-- Main -->
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
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
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Cours :</h2>
											
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
																if( isset($_SESSION['user_id']) )
																{
																	?>
																		<td id="slide-down-btn-Inscript<?= $cours[0]; ?>"><button style="font-size: 70%;">S'inscrire</button></td>
																	<?php
																}
																else
																{
																	echo "<td><button style='font-size: 70%; background-color: grey; cursor: not-allowed;' disabled>S'inscrire</button></td>";
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
																		<button class="button icon fa-times-circle slide-down-close-Inscript<?= $cours[0]; ?>">Non, annuler</button>

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
											

											<h3>More intriguing information</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus
											justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis,
											ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet
											vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
											Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
											rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
											Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi.
											Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.</p>

											<p>Phasellus odio risus, faucibus et viverra vitae, eleifend ac purus. Praesent mattis, enim
											quis hendrerit porttitor, sapien tortor viverra magna, sit amet rhoncus nisl lacus nec arcu.
											Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna,
											fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium.
											Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu.
											Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.</p>

										</article>


								</div>
							</div>
						</div>
					</div>
				</div>

