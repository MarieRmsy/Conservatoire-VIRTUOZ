
		<div id="page-wrapper">
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Créez votre compte</h2>

											<form id="registerForm">
												<input id="formEmailRegister" name="formEmailRegister" type="email" placeholder="email@foo.com" required><br/>
												<input id="formPasswordRegister" name="formPasswordRegister" type="password" placeholder="Mot de passe" required><br>
												<input id="formFirstnameRegister" name="formFirstnameRegister" type="text" placeholder="Prénom" required><br/>
												<input id="formLastnameRegister" name="formLastnameRegister" type="text" placeholder="Nom" required><br>
												<input id="formPhoneRegister" name="formPhoneRegister" type="text" placeholder="Téléphone" required><br>
												<input id="formAdressRegister" name="formAdressRegister" type="text" placeholder="Adresse postale" required><br>
												<input type="hidden" name="do" value="register">
												<button id="registerForm" type="submit">S'enregistrer</button>
											</form>
											
											<div id="slide-down-modal" class="modal tl">
												<div class="content">
													<h2>Inscription</h2>
													<hr>
													<h3 id="callbackAjax"></h3>

													<a id="redirect" href="index.php?action=connexion" class="button icon solid fa-arrow-circle-right" style="display:none">Me connecter</a>

												</div>
												<span id="slide-down-close" class="close">&times;</span>
											</div>

											<script type="text/javascript">

												$('#registerForm').on('submit', function(e){
													e.preventDefault();
													console.log('formSumitted');
													$('#callbackAjax').css('display','none');
													$.ajax({
														url: 'ajax.php',
														data: $(this).serialize(),
														method: 'POST'
													})
													.done(function(reponse, data)
													{

														console.log(reponse);
														if (reponse.state == "success")
														{
															$('#callbackAjax').text("Votre compte a bien été créé. Vous pouvez maintenant vous connecter.");
															$('#callbackAjax').css('display',"block");
															$('#redirect').css('display',"block");
														}
														else if(reponse.state == "fail")
														{
															$('#callbackAjax').text("Un compte avec votre adresse email existe déjà.");
															$('#callbackAjax').css('display',"block");
														}
													});
												});	
											</script>
											
										</article>

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>Rejoignez le 1er conservatoire d'Europe, <span id="nom"></span> !</h3>
											<footer>
												<a href="#" class="button icon solid fa-info-circle">Find out more</a>
											</footer>
										</section>

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<script src="assets/js/autocomplete.js" type="text/javascript"></script>
		<script>
			// Script Slide down effect
			// $(document).ready(function(){

			// $("#registerForm").click( function()
			// 	{
			// 		$("#slide-down-modal").slideDown('slow/400/fast', function() {
			// 		$("#slide-down-modal").css("display", "block");  	
			// 		});
			// 	}
			// );

			// $("#slide-down-close").click( function()
			// 	{
			// 		$("#slide-down-modal").slideUp('slow/400/fast', function() {
			// 		$("#slide-down-modal").css("display", "none");  	
			// 		});
			// 	}
			// );
				
			// });
		</script>