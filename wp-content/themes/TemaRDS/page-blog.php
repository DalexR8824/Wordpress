<?php get_header(); ?>
<div class="project-categories"> <?php the_tags ( '<ul><li class="active">', '</li><li>', '</li></ul>'); ?> </div>
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
                                       // query_posts(array(
                                          //  "showposts" =>3,
                                           // "cat" =>4
                                           // ));

                                    ?>
                                    

                                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                                       $id = get_cat_id('z-blog'); 
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
                                                <div class="post-date"><?php the_date(); ?></div>
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

                                    <?php echo do_shortcode("[smbtoolbar]"); ?>David Rengifo

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
                            
                            <div class="sidebar-block" style="background-color: #f5f5f5; padding: 40px; box-shadow: 10px 10px 0px 0px red; border-radius: 10px;">
                               
                               <?php 
                                    $name_post = 1;
                                    $my_post = get_post($name__post);
                                    $content = $my_post->post_content;
                                    echo $content;
                               ?>
                               <?php echo do_shortcode("[contact-form-7 id='966' title='CTA-ES]"); ?>
                               
                            </div>
                                
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $("input[id=enviar]").click(function() {

        alert("hola");
      /*$.ajax({
                  
              url: 'cta-es.php',
              type: 'POST',
              data: $('#formulario').serialize(),
        
              success: function(data) {

                alert(data);

               /*if (data == 1) {
                $("#formulario")[0].reset();
                window.location.href = "../gracias.html";
               }else{
                alert("Registro no exitoso, por favor intente nuevamente");
                $('#ModLoading').modal('hide');
               }
                 
              } 


          

      });*/

   });  
</script>

<?php get_footer(); ?>
            
