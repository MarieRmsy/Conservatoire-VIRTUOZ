			<!-- Main -->
            <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
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
											<h3>Subheading</h3>
											<ul class="style2">
												<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
												<li><a href="#">Ornare in hendrerit in lectus</a></li>
												<li><a href="#">Semper mod quis eget mi dolore</a></li>
												<li><a href="#">Quam turpis feugiat sit dolor</a></li>
												<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
												<li><a href="#">Semper mod quisturpis nisi</a></li>
											</ul>
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
													foreach ($get_Course as $cours) :?>
													
													<tr class="item_row">
															<td> <?php echo $cours[0]; ?></td>
															<td> <?php echo $cours[1]; ?></td>
															<td> <?php echo $cours[9]; ?></td>
															<td> <?php echo $cours[2]; ?></td>
															<td> <?php echo $cours[6]; echo "&nbsp;"; echo $cours[7]; ?></td>
															<td>Inscription</td>
													</tr>
													<?php endforeach;?>
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