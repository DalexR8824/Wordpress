<?php
    if (in_category(5)) { // Si el post pertenece a la cat 1, redirigir a single-1.php
    include(TEMPLATEPATH . '/prePorta.php');
    } elseif (in_category(4)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
    include(TEMPLATEPATH . '/preBlog.php');
    } elseif (in_category(71)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
    include(TEMPLATEPATH . '/preBlogen.php');
    } elseif (in_category(489)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
    include(TEMPLATEPATH . '/prePortaen.php');
    } else { // Si el post pertenece a la cat 3, redirigir a single-3.php
    //include(TEMPLATEPATH . '/single3.php');
    } ?>








