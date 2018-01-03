<?php get_header(); ?>

<!--PORTAFOLIO-->
	<div class="site-wrapper">

		<div class="site-body">

			<div id="portafolio" class="section-row" style="padding-top: 150px;">

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<h1 class="section-title show-counter">
									PORTFOLIO
									<small>
										What we love to do and what we do best
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
											<li><a href="#" data-filter=".beta-en">Beta</a></li>
											<li><a href="#" data-filter=".business-applications-en">Business Applications</a></li>
											<li><a href="#" data-filter=".design-and-corporate-identity">Design and corporate identity</a></li>
											<li><a href="#" data-filter=".digital-marketing">Digital marketing</a></li>
											<li><a href="#" data-filter=".mobile-development">Mobile Development</a></li>
											<li><a href="#" data-filter=".social-media-sem-seo">Social Media SEM SEO</a></li>
											<li><a href="#" data-filter=".social-responsibility">Social Responsibilityl</a></li>
											<li><a href="#" data-filter=".support-and-updates">Support and Updates</a></li>
											<li><a href="#" data-filter=".web-applications-development">Web Applications Development</a></li>
											<li><a href="#" data-filter=".website-development-and-design">Website Development and Design</a></li>
										</ul>
										<div class="project-categories"> <?php the_tags ( '<ul><li class="active">', '</li><li>', '</li></ul>'); ?> </div>
									</div>

										<?php 
	                                        query_posts(array(
	                                            "showposts" =>24,
	                                            "cat" =>489
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
													<div class="overlay">
														<ul class="actions">
															<!--li class="mfp-details"-->
																<a href="<?php the_permalink(); ?>" ><i class="gi gi-search"></i></a>
															<!--/li-->
														</ul>
													</div>
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

<?php get_footer(en); ?>