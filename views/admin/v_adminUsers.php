
		<div id="page-wrapper">			
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>
												Liste des utilisateurs
												<span>
													<a href="#" id="slide-down-btn-User" style="font-size: 0.6em;font-weight:bold;" class="button icon solid fa-mouse-pointer">?</a>
												</span>
												
											</h2>

											<table>
												<thead>
													<tr>
														<th>Nom Prénom</th>
														<th>Email</th>
														<th>Tel</th>
														<th>Adresse</th>
														<th>Profil</th>
														<th>Rejoindre</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach ($getUsers as $user) :?>
													
													<tr class="item_row">
														<td> <?php echo $user[1]; echo "&nbsp;"; echo $user[2]; ?></td>
														<td> <?php echo $user[3]; ?></td>
														<td> <?php echo $user[4]; ?></td>
														<td> <?php echo $user[5]; ?></td>
														<td> <?php echo $user[6]; ?></td>
														<td>Supprimer</td>
													</tr>
													<?php endforeach;?>
												</tbody>
												
											</table>
											
										</article>

								</div>
							</div>

							<div id="slide-down-modal-User" class="modal tl">
								<div class="content">
									<h2>Membre</h2>
									<hr>
									<h3 id="feedbackConnect" style="display:none;color:red;font-weight:bold;">L'identifiant et le mot de passe ne correspondent pas.</h3>
													
								</div>
											
								<span id="slide-down-close-User" class="close">&times;</span>
								</div>
						</div>
					</div>
				</div>
		</div>
		<script>
		$(document).ready(function(){

		// Slide down effect starts here
		$("#slide-down-btn-User").click( function()
			{
			$("#slide-down-modal-User").slideDown('slow/400/fast', function() {
			$("#slide-down-modal-User").css("display", "block");  	
			});
			}
		);

		$("#slide-down-close-User").click( function()
			{
			$("#slide-down-modal-User").slideUp('slow/400/fast', function() {
			$("#slide-down-modal-User").css("display", "none");  	
			});
			}
		);

		});
		</script>