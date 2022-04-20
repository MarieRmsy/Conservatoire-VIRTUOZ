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

											<h2>Connectez-vous</h2>

                                            
											<form id="loginForm">
												<input id="formEmailConnect" name="formEmailConnect" type="email" placeholder="email@foo.com"><br/>
												<input id="formPasswordConnect" name="formPasswordConnect" type="password" placeholder="Mot de passe"><br>
												<input type="hidden" name="do" value="connect">
												<button type="submit" id="slide-down-btn-Connexion">Se connecter</button>

											</form>
											
											
											<div id="slide-down-modal-Connexion" class="modal tl">
												<div class="content">
													<h2>Connexion</h2>
													<hr>
													<h3 id="feedbackConnect" style="display:none;color:red;font-weight:bold;">L'identifiant et le mot de passe ne correspondent pas.</h3>
													
												</div>
											
												<span id="slide-down-close-Connexion" class="close">&times;</span>
											</div>
			
											<script type="text/javascript">
												$('#loginForm').on('submit', function(e){
													e.preventDefault();
													console.log('formSumitted');
                                                    $('#feedbackConnect').css('display','none');
													$.ajax({
														url: 'ajax.php',
														data: $(this).serialize(),
														method: 'POST'
													})
													.done(function(reponse, data)
													{
                                                        if(reponse.state == "success")
                                                        {
                                                            $(location).attr('href',"index.php?action=me");
                                                        }
                                                        else
                                                        {
                                                            $('#feedbackConnect').css('display','block');
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

								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<script>
		$(document).ready(function(){

		// Slide down effect starts here
		$("#slide-down-btn-Connexion").click( function()
			{
			$("#slide-down-modal-Connexion").slideDown('slow/400/fast', function() {
			$("#slide-down-modal-Connexion").css("display", "block");  	
			});
			}
		);

		$("#slide-down-close-Connexion").click( function()
			{
			$("#slide-down-modal-Connexion").slideUp('slow/400/fast', function() {
			$("#slide-down-modal-Connexion").css("display", "none");  	
			});
			}
		);

		});
		</script>

	</body>
</html>