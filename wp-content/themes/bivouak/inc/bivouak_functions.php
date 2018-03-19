<?php

// Changing excerpt more
   function bivouak_excerpt_more($more) {
   global $post;
   return '<a class="text-danger" href="'. get_permalink($post->ID) . '">' . ' Lire la suite' . '</a>';
   }
   add_filter('excerpt_more', 'bivouak_excerpt_more');

   function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
