<?php
/**
 * Template Name: MESTC Home Page
 *
 * This Full Width template based on THEMATIC is for the specific MESTC home page.
 * 
 * @package MESTC
 * @subpackage Templates
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>

		<div id="container">
		
			<?php
				// action hook for inserting content above #content
				thematic_abovecontent();		
	    	
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic_open_id_content', '<div id="content">' . "\n\n" );
			
				// calling the widget area 'page-top'
	            get_sidebar('page-top');
	
	            // start the loop
	            while ( have_posts() ) : the_post();
	            
	            // action hook for inserting content above #post
	            thematic_abovepost();
				
	        ?>
	            
				<?php
					echo '<div id="post-' . get_the_ID() . '" ';
					// Checking for defined constant to enable Thematic's post classes
					if ( ! ( THEMATIC_COMPATIBLE_POST_CLASS ) ) {
					    post_class();
					    echo '>';
					} else {
					    echo 'class="';
					    thematic_post_class();
					    echo '">';
					}

	            ?>
	              <div class="entry-content">
	
	                    <?php
	                    	the_content();
	                  
	                    	edit_post_link( __( 'Edit', 'thematic' ), '<span class="edit-link">','</span>' );
	                    ?>
	
					</div>
					
				</div><!-- .post -->
	
			<?php
				// calls the do_action for inserting content below #post
	        	thematic_belowpost();
	        		        
	        	// action hook for calling the comments_template
       			thematic_comments_template();
        		
	        	// end loop
        		endwhile;
	        
	        	// calling the widget area 'page-bottom'
	        	get_sidebar( 'page-bottom' );
	        ?>
	
			</div><!-- #content -->
			
            
			<?php 
				// action hook for inserting content below #content
				thematic_belowcontent(); 
			?> 
		</div><!-- #container -->

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>