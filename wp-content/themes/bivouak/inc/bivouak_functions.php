<?php

// Changing excerpt more
   function bivouak_excerpt_more($more) {
     global $post;
     return '<a class="text-danger" href="'. get_permalink($post->ID) . '">' . ' Lire la suite' . '</a>';
   }
   add_filter('excerpt_more', 'bivouak_excerpt_more');

// Add dropdown flag to the menu
   function my_nav_wrap() {
      $wrap  = '<ul id="%1$s" class="%2$s">';
      $wrap .= '%3$s';
      $wrap .= '<li class="nav-item"><a href="#">
                  <div class="dropdown show">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-fr"></span> FR
                    </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-gb"></span> EN</a>
                  </div>
                 </div>
                </li>';
      $wrap .= '</ul>';
      return $wrap;
    }

   //Register new menu for footer-bivouak
   register_nav_menus( array(
     'menu-footer-bivouak' => esc_html__( 'Footer Bivoik', 'bivouak' ),
   ));

   //Register new menu for footer-yakaygo
   register_nav_menus( array(
     'menu-footer-yakaygo' => esc_html__( 'Footer Yakaygo', 'bivouak' ),
   ));
