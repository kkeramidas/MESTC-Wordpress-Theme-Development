<?php
/**
 * MESTC Index Template
 *
 *
 * @package Thematic
 * @subpackage Templates
 */

	// calling the header.php
	get_header();
	
	// action hook for placing content above #container
	thematic_abovecontainer();
?>

		<div id="container">

			<?php
		    	// action hook for placing content above #content
				thematic_abovecontent();
				
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic_open_id_content', '<div id="content">' . "\n\n" );				
				
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
				
            	// calling the widget area 'index-bottom'
            	get_sidebar('index-bottom');
				
            	// create the navigation below the content
            	thematic_navigation_below();
            ?>

			</div><!-- #content -->

			<?php
				// action hook for placing content below #content
				thematic_belowcontent();
			?>
		</div><!-- #container -->
		
<?php
	// action hook for placing content below #container
	thematic_belowcontainer();
	
	// calling the standard sidebar 
	thematic_sidebar();
	
	// calling footer.php
	get_footer();
?>