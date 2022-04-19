<html>
	<head>
		<title>Virtuoz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/perso.css" />
		<link rel="stylesheet" href="./modules/modal/modal.css"/>
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">			<!-- Main -->
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Inscription au cours</h2>

											<div id="callbackAjax" style="display:none"></div>

											<form id="registerForm">
												<input id="formEmailRegister" name="formEmailRegister" type="email" placeholder="email@foo.com"><br/>
												<input id="formPasswordRegister" name="formPasswordRegister" type="password" placeholder="Mot de passe"><br>
												<input id="formFirstnameRegister" name="formFirstnameRegister" type="text" placeholder="Prénom"><br/>
												<input id="formLastnameRegister" name="formLastnameRegister" type="text" placeholder="Nom"><br>
												<input id="formPhoneRegister" name="formPhoneRegister" type="text" placeholder="Téléphone"><br>
												<input id="formAdressRegister" name="formAdressRegister" type="text" placeholder="Adresse postale"><br>
												<input type="hidden" name="do" value="register">
												<button type="submit">S'enregistrer</button>

											</form>
											
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
														}
														else if(reponse.state == "fail")
														{
															$('#callbackAjax').text("Un compte avec votre adresse email existe déjà");
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
											<h3>Subheading</h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
											consequat etiam.</p>
											<footer>
												<a href="#" class="button icon solid fa-info-circle">Find out more</a>
											</footer>
										</section>

										<section>
											<h3>Inscription</h3>
											<?php include './modules/modal/modalInscription.php';?>
										</section>

										<section>
											<h3>Connexion</h3>
											<?php include './modules/modal/modalConnexion.php';?>
										</section>

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		
	</body>
</html>