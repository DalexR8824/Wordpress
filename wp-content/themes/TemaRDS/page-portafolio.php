<?php get_header(); ?>

<!--PORTAFOLIO-->
	<div class="site-wrapper">

		<div class="site-body">

			<div id="portafolio" class="section-row" style="padding-top: 150px;">

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<h1 class="section-title show-counter">
									PORTAFOLIO
									<small>
										Lo que nos apasiona hacer y lo que mejor sabemos hacer
									</small>
								</h1>

							</div>

						</div>

						<div class="row" data-animation-chain-duration="1200">

							<div class="col-md-12">

								<div class="projects">

									<div class="filter">
										<span class="active-label visible-xs" data-toggle="dropdown">All</span>
										<ul>
											<li class="active"><a href="#" data-filter="*">All</a></li>
											<li><a href="#" data-filter=".aplicaciones-empresariales">Aplicaciones Empresariales</a></li>
											<li><a href="#" data-filter=".beta">Beta</a></li>
											<li><a href="#" data-filter=".desarrollo-aplicaciones-web-es">Desarrollo Aplicaciones Web</a></li>
											<li><a href="#" data-filter=".desarrollo-para-moviles">Desarrollo para Móviles</a></li>
											<li><a href="#" data-filter=".desarrollo-y-diseno-de-sitios-web-es">Desarrollo y Diseño de Sitios Web</a></li>
											<li><a href="#" data-filter=".diseno-e-identidad-corporativa">Diseño e Identidad Corporativa</a></li>
											<li><a href="#" data-filter=".marketing-digital">Marketing Digital</a></li>
											<li><a href="#" data-filter=".responsabilidad-social">Responsabilidad Social</a></li>
											<li><a href="#" data-filter=".social-media-seo-sem-es">Social Media SEO SEM</a></li>
											<li><a href="#" data-filter=".soporte-y-actualizacion">Soporte y Actualización</a></li>
										</ul>
										<div class="project-categories"> <?php the_tags ( '<ul><li class="active">', '</li><li>', '</li></ul>'); ?> </div>
									</div>

										<?php 
	                                        query_posts(array(
	                                            "showposts" =>30,
	                                            "cat" =>5
	                                            ));	

	                                    ?>

									<div class="items">

										<div class="grid-sizer"></div>
										
										<div class="gutter-sizer"></div>
										
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
								         
                                                    
											<div class="project <?php 
                                           
                                            $categories = get_the_category();
                                            $excludedcats = array( 4, 5 );
                                            $separator = ' ';
                                            $output = '';
                                                   foreach ($categories as $category):
                                                          if ( !in_array($category->cat_ID, $excludedcats) ) {
                                                            $output .= '' . esc_html( $category->slug ) . $separator . '';

                                                         }
                                                         
                                                    endforeach;
                                                    echo trim( $output, $separator );
                                        
                                        ?>" id= "<?php echo single_cat_title("", false); ?>" data-animation-name="fadeInDown">
												
												<div class="project-image">
														
															<?php 
	                                                                if (has_post_thumbnail()){
	                                                                    the_post_thumbnail('category-thum', 
	                                                                                        array('class' => 'rsImg'));
	                                                                }
	                                                            ?> 
	                                                            	<a href="<?php the_permalink(); ?>" >
													<div class="overlay">
														<ul class="actions">
															<!--li class="mfp-details"-->
																<i class="gi gi-search"></i>
															<!--/li-->
														</ul>
													</div>
													</a>
												</div>

												<div class="project-info">
													<h4 class="project-name"><?php the_title(); ?></h4>

													 <small>
                                        <?php 
                                           
                                            $categories = get_the_category();
                                            $excludedcats = array( 4, 5 );
                                            $separator = ' / ';
                                            $output = '';
                                                   foreach ($categories as $category):
                                                          if ( !in_array($category->cat_ID, $excludedcats) ) {
                                                            $output .= '' . esc_html( $category->name ) . $separator . '';

                                                         }
                                                         
                                                    endforeach;
                                                    echo trim( $output, $separator );
                                        
                                        ?>
                                        
                                    </small>
																	
												</div>
												<small>
                                        
                                        
                                    </small>
												
											</div>

										<?php endwhile; ?>
										<!-- post navigation -->
										<?php else: ?>
										<!-- no posts found -->
										<h3>No hay entradas</h3>
										<?php endif; ?>
										
							

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

		</div>

<?php get_footer(); ?>