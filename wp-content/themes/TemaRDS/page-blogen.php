<?php get_header(); ?>
<div class="project-categories"> <?php the_tags ( '<ul><li class="active">', '</li><li>', '</li></ul>'); ?> </div>
        <div class="site-wrapper">
            <div class="site-body">
    <section class="section">
        <div class="section-row-container">
            <div class="section-row contenedorBlog">
                <h1 class="page-title text-center tituloBlog">
                    Red Design Systems Blog
                                            <small>Our Articles</small>
                                    </h1> 
            </div>

            <div class="section-row no-padding-top">
                <div class="container">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="posts-wrap">
                                
							
                                    <?php 
                                       // query_posts(array(
                                          //  "showposts" =>3,
                                           // "cat" =>4
                                           // ));

                                    ?>
                                    

                                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                                       $id = get_cat_id('blogen'); 
                                        query_posts('cat='. $id .'&paged=' . $paged . 'exclude=5'); ?>
                                                
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
                                                        
                                                            <a href="<?php the_permalink(); ?>"><i class="gi gi-search"></i></a>
                                                             
                                                        
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
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary botonRds btn-sm">Read More</a>
                                        </div>
                                        
                                    </div>


                                </article>
                                                   <?php endwhile; wp_reset_query(); ?>
                                                      
                                   
                                                             <?php kriesi_pagination($additional_loop->max_num_pages); ?> 
                                                
                                                    
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
                                                                    <p>Welcome to RDS´ blog, a space in which experts and colaborators review the latest trends on web marketing and technology</p>
                                
                            </div>

                            <div class="sidebar-block">

                                 <h4 class="sidebar-title">CATEGORIES</h4>

                                 
                                  
                                
                                        <?php 
                                        wp_list_categories( array(
                                                                        'exclude'  => array(  4,5,71,489,644,636,632,665,648,675),
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

<?php get_footer(en); ?>
            
