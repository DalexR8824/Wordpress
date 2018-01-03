		<!--FOOTER-->
		<footer class="site-footer sectionFooter" id="footer">
			<div class="footer-logo">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a href="#">
								<img src="<?php bloginfo('template_directory')?>/assets/img/logo2.png" style="width: 100px" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>

			<section id="contact" class="section">

				<div class="section-row-container">

					<div class="section-row half-padding-bottom">

						<div class="container">

							<div class="row">

								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<h5 class="widget-title title">RED DESIGN SYSTEMS</h5>
									<!--ul>
										<li><a href="http://reddesignsystems.com/">Inicio</a></li>
										<li><a href="http://reddesignsystems.com/servicios">Servicios</a></li>
										<li> <a href="http://reddesignsystems.com/portafolio">Portafolio</a></li>
										<li><a href="http://reddesignsystems.com/nosotros">Nosotros</a></li>
										<li><a href="http://reddesignsystems.com/blog">Blog</a></li>
										<li><a href="http://reddesignsystems.com/contacto">Contacto</a></li>
										<li><a href="http://reddesignsystems.com/glosario">Glosario</a></li>
										<li><a href="http://reddesignsystems.com/video">Video</a></li>
									</ul-->
									<?php    /**
								* Displays a navigation menu
								* @param array $args Arguments
								*/
								$args = array(
									'theme_location' => 'secundario',
									'container' => 'ul',
									'container_class' => '',
									
								);
							
								wp_nav_menu( $args ); 
								?>
								</div>

								





								<div class="col-lg-4 col-md-5 col-sm-4 col-xs-12">
									<h5 class="widget-title title">CONTACT US</h5>
									<form method="post" class="form-horizontal contact-form" action="php/contact/contact.php">

										<!-- Honeypot SPAM Protection -->
										<input type="text" name="cf[honeypot]" style="display: none">
										<!-- END Honeypot SPAM Protection -->

										<div class="form-group">
											<div class="col-md-12">
												<input type="text" name="cf[name]" class="form-control required" placeholder="* Name">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<input type="email" name="cf[email]" class="form-control required email" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<textarea name="cf[message]" rows="6" class="form-control required" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<input type="submit" value="Send" class="btn btn-sm btn-block btn-primary">
											</div>
										</div>
									</form>

								</div>

								<div class="col-lg-5 col-md-4 col-sm-5 col-xs-12">
									<figure>
										<img class="trabaja" alt="trabaja en Red Design Systems" src="<?php bloginfo('template_directory')?>/assets/img/trabaje-con-nosotros.png">
									</figure>
									<p>At <span style="font-weight: bold;">Red Design Systems </span> we are always looking for creative people with initiative, who are responsible and oriented towards achieving their goals. If you think you have what it takes to join the team please send us your CV now! </p>
									<a href="http://reddesignsystems.com/en/join-our-team/" class="btn btn-sm btn-primary btn-block" style="color: white;">Join our team!</a>
								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<!-- <div class="footer-widgets">

				<div class="container">

					<div class="row">

						<div class="col-md-4">
							<h5 class="widget-title">About Hydrogen</h5>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="col-md-4">
							<h5 class="widget-title">About Hydrogen</h5>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="col-md-4">
							<h5 class="widget-title">About Hydrogen</h5>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

					</div>

				</div>

			</div> -->

			<div class="footer-bottom">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<div class="footer-text">
								Red Design Systems ®
							</div>

							<div class="social-list">
								<ul>
									<li>
										<a href="https://www.facebook.com/RedDesignSystems" target="blank">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/Redsyscorp" target="blank">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/user/redsyscorp3" target="blank">
											<i class="fa fa-youtube"></i>
										</a>
									</li>
									<li>
										<a href="https://plus.google.com/u/0/112889510308223494220/posts" target="blank" rel="publisher">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="http://www.linkedin.com/company/red-design-systems" target="blank">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>

					</div>

				</div>

			</div>

		</footer>

	</div>

	<?php wp_footer(); ?>
	
		

</body>

</html>
