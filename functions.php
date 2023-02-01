<?php 

function dev_study_files(){
    wp_enqueue_style( 'dev_study_main_styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'dev_study_files' );
