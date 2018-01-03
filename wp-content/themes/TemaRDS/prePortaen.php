<?php get_header(); ?>

<div class="site-wrapper">
    <div class="site-body">
        <section class="section project-details">
            <div class="section-row-container">
                <div class="section-row three-quarters-padding-bottom project-title tituloProyecto" style="padding-bottom: 30px; padding-top: 100px;">
                    <div class="container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-title text-center">
                                    <?php the_title(); ?>
                                    <small>
                                        <?php 
                                           
                                            $categories = get_the_category();
                                            $excludedcats = array( 4, 5, 489 );
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
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-row half-padding-top half-padding-bottom project-media shadow-bg" style="padding: 0px;">
                    <div class="media-container">
                        <div class="standard-slider">
                            <div class="royalSlider rsHydrogen" data-image-scale-mode="fit">
                                 
                         
                                    <?php 
                                      
                                        if (has_post_thumbnail()){
                                                                    the_post_thumbnail('category-thum', 
                                                                                        array('class' => 'rsImg'));
                                                                }
                                        if (class_exists('MultiPostThumbnails')) :
                                                MultiPostThumbnails::the_post_thumbnail(
                                                                                        get_post_type(),
                                                                                        'two-image'
                                                );
                                            endif;
                                        
                                        if (class_exists('MultiPostThumbnails')) :
                                                MultiPostThumbnails::the_post_thumbnail(
                                                                                        get_post_type(),
                                                                                        'three-image'
                                                );
                                            endif;
                                        if (class_exists('MultiPostThumbnails')) :
                                                MultiPostThumbnails::the_post_thumbnail(
                                                                                        get_post_type(),
                                                                                        'four-image'
                                                );
                                            endif;
                                        if (class_exists('MultiPostThumbnails')) :
                                                MultiPostThumbnails::the_post_thumbnail(
                                                                                        get_post_type(),
                                                                                        'five-image'
                                                );
                                            endif;
                                    ?> 
                                  
                       
                                                                                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-row project-description half-padding-top half-padding-bottom contenidoProyecto">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <p dir="ltr">
                                    <span id="docs-internal-guid-15afe52f-8b6e-aeff-ad54-28409caafc09">
                                    <span a="" actualizar="" administrador="" armar="" background-color:="" c="" clientes="" color:="" cuenta="" d="" de="" desarrollada="" diferentes="" el="" esta="" font-family:="" ha="" id="docs-internal-guid-15afe52f-8b6e-aeff-ad54-28409caafc09" la="" los="" n="" ofrece="" opci="" para="" productos="" resp="" restaurante="" se="" sido="" span="" su="" un="" vertical-align:="" web="" white-space:="" y=""><?php the_content(); ?> 
                                    </span>
                                    </span><br /><br />

                            </div>
                            <aside class="col-md-4 sidebar project-sidebar">
                                <div class="sidebar-block">
                                    <h4 class="sidebar-title">Category</h4>
                                        
                                        <?php 
                                           
                                            $categories = get_the_category();
                                            $excludedcats = array( 4, 5, 489 );
                                            $separator = ' / ';
                                            $output = '';
                                                   foreach ($categories as $category):
                                                          if ( !in_array($category->cat_ID, $excludedcats) ) {
                                                            $output .= '' . esc_html( $category->name ) . $separator . '';

                                                         }
                                                         
                                                    endforeach;
                                                    echo trim( $output, $separator );
                                        
                                        ?>
                                    
                                </div>
                                
                                <div class="sidebar-block">
                                    <h4 class="sidebar-title">What we did</h4>
                                    <ul>
                                        <li>Diseño, desarrollo e implementación del sitio web</li>
                                    </ul>
                                </div>
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
                                            <!-- post navigation -->
                                            <?php else: ?>
                                            <!-- no posts found -->
                                                <h3>No hay entradas</h3>
                                            <?php endif; ?>
        </section>
   </div> 
</div>



<?php get_footer(en); ?>
            
