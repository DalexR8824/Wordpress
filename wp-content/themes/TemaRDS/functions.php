<?php

function post_is_in_descendant_category( $cats, $_post = null ){
    foreach ( (array) $cats as $cat ) {
        // get_term_children() accepts integer ID only
        $descendants = get_term_children( (int) $cat, 'category');
        if (post_is_in_descendant_category(71)){
 include (TEMPLATEPATH . '/category-en.php'); 
 print(post_is_in_descendant_category());
 exit;
} 

    }
    return false;
}

//===========Paginador===================================

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range / 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
//===========FIN Paginador===================================

//Activando el soporte para Sidebar
if (function_exists('register_sidebar')) {
	
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( 'Widget del CTA', 'TemaRDS' ),
			'id'            => 'Id-WdeFooter', 
			'description'   => '',
			'class'         => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
		);
	
		
	
		register_sidebar( $args );
	
}
//FIN Activando el soporte para Sidebar

//Activando el soporte para imagenes destacadas

add_theme_support('post-thumbnails');

//Soporte multiples imagenes destacadas
if (class_exists('MultiPostThumbnails')) {
	
    new MultiPostThumbnails(
        array(
            'label' => 'Two Image',
            'id' => 'two-image',
            'post_type' => 'post'
        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Three Image',
            'id' => 'three-image',
            'post_type' => 'post'
        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Four Image',
            'id' => 'four-image',
            'post_type' => 'post'
        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'five Image',
            'id' => 'five-image',
            'post_type' => 'post'
        )
    );
}
//FIN Activando el soporte para imagenes destacadas

//Excerpt cantidad de carateres
	function wpdocs_custom_excerpt_length( $length ) {
	    return 19;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//FIN Excerpt cantidad de carateres


    
// Carda de Menu
    register_nav_menus( array (

				    	'principal' => 'Menu Principal',
				    	'secundario' => 'Menu Footer',

				    	));
//FIN Carda de Menu

// Carda de Js
    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */


	function misEstilos() {
		
		

		wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_script( 'myscript', get_template_directory_uri() . '/assets/js/myscript.js', array( 'jquery' ), '1.11.1', true);

        wp_enqueue_script( 'jquery-1', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array( 'jquery' ), '1.11.1', true);

        wp_enqueue_script( 'hydrogen.setup', get_template_directory_uri() . '/assets/js/hydrogen.setup.min.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'hydrogen.scripts', get_template_directory_uri() . '/assets/js/hydrogen.scripts.min.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'hydrogen.plugins', get_template_directory_uri() . '/assets/js/hydrogen.plugins.js', array( 'jquery' ), '3.1.1', true);

        wp_enqueue_script( 'royalslider', get_template_directory_uri() . '/assets/plugins/royalslider/jquery.royalslider.min.js', array( 'jquery' ), '9.5.4', true);
        wp_enqueue_script( 'mfp', get_template_directory_uri() . '/assets/plugins/mfp/jquery.mfp-0.9.9.min.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'mediaelement-and-player', get_template_directory_uri() . '/assets/plugins/mediaelement/mediaelement-and-player.min.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/assets/plugins/gmap/gmap3.min.js', array( 'jquery' ), '6.0.0', true);

        wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/plugins/owlcarousel/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/plugins/isotope/jquery.isotope.min.js', array( 'jquery' ), '2.0.0', true);
        wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/plugins/form/jquery.form.min.js', array( 'jquery' ), '20140218', true);
        wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/plugins/form/jquery.validate.min.js', array( 'jquery' ), '1.11.1', true);
        wp_enqueue_script( 'jquery-scrollto', get_template_directory_uri() . '/assets/js/jquery-scrollto.js', array( 'jquery' ), '1.11.1', true);
		
	}

	add_action( 'wp_enqueue_scripts', 'misEstilos' );
// FIN Carda de Js




?>
	
	