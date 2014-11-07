<?php
/**
 * DYNAMIC PAGE THAT INCLUDES ALL TEMPLATES WITH AN OPTION TO REORDER ALL PARTS
 */

get_header(); ?>

<?php
get_template_part( 'templates/slider'); 
get_template_part( 'templates/our', 'services' );
get_template_part( 'templates/parallax' );
get_template_part( 'templates/testimonials' );
get_template_part( 'templates/stripteam' );
get_template_part( 'templates/our', 'team' );
get_template_part( 'templates/our', 'skills' );
get_template_part( 'templates/stripcontact' );
get_template_part( 'templates/contactus' );
get_template_part( 'templates/contactsocial' );




 ?>


<?php get_footer(); ?>