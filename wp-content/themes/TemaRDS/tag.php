<?php get_header(); ?>

        <div class="site-wrapper">
            <div class="site-body">
    <section class="section">
        <div class="section-row-container">
            <div class="section-row contenedorBlog">
                <h1 class="page-title text-center tituloBlog">
                    Red Design Systems Blog
                                            <small>Nuestros artículos</small>
                                    </h1> 
            </div>

            <div class="section-row no-padding-top">
                <div class="container">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="posts-wrap">
                                
							         
                                      <?php
                                            // Show an optional term description.
                                            $term_description = term_description();
                                            if ( ! empty( $term_description ) ) :
                                                printf( '<div class="taxonomy-description">%s</div>', $term_description );
                                            endif;
                                    ?>
										
                                    
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article class="post">
                                    <div class="post-inner row">
                                    	
                                        <div class="post-media col-md-12">
                                            <div class="media">

                                                <figure class="post_image">
                                                    <?php 
																if (has_post_thumbnail()){
																	the_post_thumbnail('category_thumb');
																}
															?>
                                                </figure>
                                                <div class="overlay">
                                                    <ul>
                                                        <li class="mfp-zoom">
                                                        	 
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="post-content col-md-12">

                                            <div class="post-header">
                                                <div class="post-date"><?php the_modified_date(); ?></div>
                                                <h3 class="post-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <ul class="meta">
                                                    <li>Escrito por: <?php the_author(); ?></li>
                                                    
                                                </ul>
                                            </div>
                                            <p><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary botonRds btn-sm">Leer mas</a>
                                        </div>
                                        
                                    </div>


                                </article>
                                                               <?php endwhile; kriesi_pagination($additional_loop->max_num_pages); wp_reset_query(); ?>
                                                          
													<!-- post navigation -->
													<?php else: ?>
													<!-- no posts found -->
													<h3>No hay entradas</h3>
													<?php endif; ?>
                                                                
                                
                                

                                                            </div>
                        </div>
                        <aside class="sidebar col-md-4">

                            <div class="sidebar-block">
                                <h4 class="sidebar-title"></h4>
                                                                    <p>Bienvenido al blog de RDS, un espacio en el que expertos y colaboradores revisan las últimas tendencias en mercadeo web y tecnologÌa.</p>
                                
                            </div>

                            <div class="sidebar-block">

                                 <h4 class="sidebar-title">Categorias</h4>
                          
                                
                                       <?php 
                                        wp_list_categories( array(
                                                                    'exclude'  => array( 4,5,103,101,96,105,111,87,89,113,117,115,99,107 ),
                                                                    'title_li' => ''
                                                                ) ); 
                                        ?>
                                		
                            </div>

                            <div class="sidebar-block">
                                <h4 class="sidebar-title">Último tweet</h4>
                                <div class="tweet-list" data-count="1" data-username="Redsyscorp"></div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
            
