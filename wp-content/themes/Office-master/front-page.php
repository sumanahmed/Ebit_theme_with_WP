<?php get_header(); ?>

<?php
$sorter = $office_master['section_sorter']['enabled']; 
if(is_array($sorter)){
    foreach($sorter as $key => $value){
        switch($key){
            case 'slider': get_template_part('section/section-slider');
            break;

            case 'service': get_template_part('section/section-service');
            break;

            case 'red': get_template_part('section/section-red');
            break;

            case 'green': get_template_part('section/section-green');
            break;
            
            case 'blue': get_template_part('section/section-blue');
            break;
        }
    }
}    
?>

 <?php get_footer(); ?>