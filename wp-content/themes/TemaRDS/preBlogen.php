<?php get_header(); ?>



        <div class="site-wrapper">
            <div class="site-body">
        <section class="section articulo">
        <div class="section-row-container">
            <div class="section-row three-quarters-padding-bottom blogArticulo">
                <div class="container">
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <h1 class="page-title text-center tituloPost">
                                <?php the_title(); ?>
                                <small>
                                         por: <?php the_author(); ?> &dash; 
                                                                                      
                                    <span class="month"><?php the_date(); ?></span>
                                </small>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-row no-padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <article class="post">
                                <div class="post-inner row">
                                    <div class="post-media col-md-12">
                                        <div class="media">
                                            <figure>
                                                <?php 
																if (has_post_thumbnail()){
																	the_post_thumbnail('category_thumb');
																}
															?>
                                            </figure>
                                            <div class="overlay">
                                                <ul>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-content col-md-12">
                                        <div class="post-body">
                                        	<?php the_content(); ?>	
                                            <div class="post-tags">
                                                <span class="tags-label">Tags:</span>
                                                    <div class="keywords">
                                                        <?php the_tags ( '<span style="padding-right: 3px;" >', '</span><span style="padding-right: 3px;">', '</span>'); ?>
                                                       
                                                    </div>
                                            </div>
                                        </div>

                                        <?php comments_template(); ?>
                                        
                                            <?php endwhile; ?>
                                            <!-- post navigation -->
                                            <?php else: ?>
                                            <!-- no posts found -->
                                                <h3>No hay entradas</h3>
                                            <?php endif; ?>
                                            <?php wp_reset_query(); ?>
                                    </div>
                                    <div class="post-content col-md-12 shareit">
                                        <span class='st_facebook_hcount' displayText='Facebook'></span>
                                        <span class='st_twitter_hcount' displayText='Tweet'></span>
                                        <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                                        <span class='st_googleplus_hcount' displayText='Google +'></span>
                                    </div>
                                </div>
                            </article>

                            <div class="post-comments">
                                <div id="disqus_thread"></div>
                            </div>
                        </div>
                        <aside class="sidebar col-md-4">
                            <div class="sidebar-block">
                                <h4 class="sidebar-title"></h4>
                                                                   <p>Welcome to RDS´ blog, a space in which experts and colaborators review the latest trends on web marketing and technology.</p>
                                                            </div>

                            <div class="sidebar-block">
                                <h4 class="sidebar-title">Categorias</h4>
                                <?php 
                                    wp_list_categories( array(
                                                                    'exclude'  => array( 4,5,71,489,644,636,632,665,648,675 ),         
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