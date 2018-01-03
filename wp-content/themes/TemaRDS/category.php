<?php
    if (in_category(71)) { // Si el post pertenece a la cat 1, redirigir a single-1.php
    include(TEMPLATEPATH . '/categoryen.php');
    } elseif (in_category(4)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
        include(TEMPLATEPATH . '/categoryEs.php');
    }  // Si el post pertenece a la cat 3, redirigir a single-3.php
    //include(TEMPLATEPATH . '/single3.php');
     ?>