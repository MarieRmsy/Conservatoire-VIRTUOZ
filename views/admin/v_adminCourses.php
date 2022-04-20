
		<div id="page-wrapper">			
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Gestion des cours</h2>

                                            test
											
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
												<a href="#" id="slide-down-btn-Courses" class="button icon solid fa-info-circle">Find out more</a>
											</footer>
										</section>

								</div>
							</div>

							<div id="slide-down-modal-Courses" class="modal tl">
								<div class="content">
									<h2>Cours</h2>
									<hr>
									<h3 id="feedbackConnect" style="display:none;color:red;font-weight:bold;">L'identifiant et le mot de passe ne correspondent pas.</h3>
													
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