<?php
/**
 * Template Name: MESTC Index Page
 * 
 * This page is for unique front page of MESTC site based on THEMATIC index.php page
 *
 * @package MESTC
 * @subpackage Templates
 */

    // calling the header.php
    get_header();

    // calling the widget area 'index-top'
	get_sidebar('index-top');
    
	// action hook for placing content above #container
    thematic_abovecontainer();
  	
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>