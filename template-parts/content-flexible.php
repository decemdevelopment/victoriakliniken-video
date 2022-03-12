<?php 
    if ( have_rows('flexible_content') ) :
        while ( have_rows('flexible_content') ) : the_row();
            if (get_row_layout() == 'acf_field_name') {
                get_template_part( 'template-parts/component', 'your-component-name');
            } 
            else if (get_row_layout() == 'other_acf_field_name') {
                get_template_part( 'template-parts/component', 'your-other-component-name');
            }
			else {
                the_content();
            }
        endwhile;
    endif;
?>