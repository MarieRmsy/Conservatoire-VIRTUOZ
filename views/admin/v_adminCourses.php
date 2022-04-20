
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
													<a href="#" id="slide-down-btn-Courses" style="font-size: 0.6em;font-weight:bold;" class="button icon solid fa-mouse-pointer">Ajouter un cours</a>
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
													
													<tr class="item_row">
															<td> <?php echo $cours[0]; ?></td>
															<td> <?php echo $cours[1]; ?></td>
															<td> <?php echo $cours[9]; ?></td>
															<td> <?php echo $cours[2]; ?></td>
															<td> <?php echo $cours[6]; echo "&nbsp;"; echo $cours[7]; ?></td>
															<td>Supprimer</td>
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>
											
										</article>

								</div>
							</div>

							<div id="slide-down-modal-Courses" class="modal tl">
								<div class="content">
									<h2>Ajouter un cours</h2>
									<hr>
									</br>
									<form id="registerForm">
											<input id="formEmailRegister" name="formEmailRegister" type="text" placeholder="Lundi 17h"><br/>
											<input id="formPasswordRegister" name="formPasswordRegister" type="text" placeholder="Nombre de places"><br>
											<select><option value="Prof">Professeurs</option></select>
											<select><option value="Prof">Instrument</option></select>
											<input type="hidden" name="do" value="register">
											<button type="submit">Ajouter</button>
									</form>
								</div>
											
								<span id="slide-down-close-Courses" class="close">&times;</span>
							</div>
						</div>
					</div>
				</div>
		</div>
		<script>
		$(document).ready(function(){

		// Slide down effect starts here
		$("#slide-down-btn-Courses").click( function()
			{
			$("#slide-down-modal-Courses").slideDown('slow/400/fast', function() {
			$("#slide-down-modal-Courses").css("display", "block");  	
			});
			}
		);

		$("#slide-down-close-Courses").click( function()
			{
			$("#slide-down-modal-Courses").slideUp('slow/400/fast', function() {
			$("#slide-down-modal-Courses").css("display", "none");  	
			});
			}
		);

		});
		</script>