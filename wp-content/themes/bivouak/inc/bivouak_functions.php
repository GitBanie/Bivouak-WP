<?php

// Changing excerpt more
   function bivouak_excerpt_more($more) {
   global $post;
   return '<a class="text-danger" href="'. get_permalink($post->ID) . '">' . ' Lire la suite' . '</a>';
   }
   add_filter('excerpt_more', 'bivouak_excerpt_more');

    // Add dropdown flag to the menu
   function add_last_nav_item($items) {
     return $items .= '
     <li class="nav-item">
        <div class="dropdown show">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="flag-icon flag-icon-fr"></span> FR
                </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-gb"></span> EN</a>
          </div>
        </div><!-- /dropdown -->
      </li>';
   }
   add_filter('wp_nav_menu_items','add_last_nav_item');
