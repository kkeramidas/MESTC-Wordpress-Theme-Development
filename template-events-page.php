<?php
/**
 * Template Name: MESTC Events Page
 *
 * Special features include auto populating side calendar and upcoming event under each category
 * …
 * Based on page.php from THEMATIC Template
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
				// action hook for placing content above #content
				thematic_abovecontent();

				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic_open_id_content', '<div id="content">' . "\n" );
		
	            // start the loop
	            while ( have_posts() ) : the_post();

				// action hook for placing content above #post
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
	                
	                // creating the post header
	                thematic_postheader();
				?>
	                
					<div class="entry-content">
	
						<?php
						    
	                    	the_content();
							
							?><div class="event-block">

                            <div class="event-image-left"><a href="<?php echo get_site_url(); ?>/events-list/category/us-theatre/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/EVENTS_us-theatre.jpg" align="alignleft" width="175" height="115" title="US Theatre"/></a><br/><strong>The Group Theatre</strong></div>
                            
                            <div class="event-text"><a class="us-theatre" href="<?php echo get_site_url(); ?>/events-list/category/us-theatre/">US Theatre</a></div>
                            Theatre in the United States is as various as the country's people. Recognizing that diversity wears many faces, MESTC organizes readings, performances, and panels that address the question of how artists make theatre in this country.                            
                            
                            <?php return_upcoming_category_event('us-theatre');?>
                            
                            </div>
                            
                            <div class="event-block">
                            
                            <div class="event-image-left"><a href="<?php echo get_site_url(); ?>/events-list/category/international-theatre/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/EVENTS_international-theatre.jpg" align="alignleft" width="175" height="115" title="International Theatre"/></a><br/><strong>Kathakali Today</strong><br />Photo court. Boris Daussà-Pastor</div>
                            
                            <div class="event-text"><a class="international-theatre" href="<?php echo get_site_url(); ?>/events-list/category/international-theatre/">International Theatre</a></div>
                            Providing opportunities for people to learn and communicate about varieties of art and culture, the Center's world theatre programs bring contemporary theatre to the fore, while acknowledging the traditions of the past.

                            <?php return_upcoming_category_event('international-theatre');?>
                            
                            </div>
                            
                            <div class="event-block">
                            
                            <div class="event-image-left"><a href="<?php echo get_site_url(); ?>/events-list/category/publication-theatre/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/EVENTS_publication-theatre.jpg" align="alignleft" width="175" height="115" title="Publications for Theatre"/></a><br/><strong><em>Beyond Bollywood &amp; Broadway</em></strong></div>
                            
                            <div class="event-text"><a class="publication-theatre" href="<?php echo get_site_url(); ?>/events-list/category/publication-theatre/">Publication for the Theatre</a></div>
                            As a publisher, the Center supports and celebrates publishing for the theatre, presenting new anthologies and hosting book launches as part of its ongoing commitment to theatre and text.
                            
                            <?php return_upcoming_category_event('publication-theatre');?>
                            
                            </div>
                            
                            <div class="event-block">
                            
                            <div class="event-image-left"><a href="<?php echo get_site_url(); ?>/events-list/category/conferences/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/EVENTS_conferences.jpg" align="alignleft" width="175" height="115" title="Conferences"/></a><br/><strong>Temporary Distortion</strong><br />Photo by Temporary Distortion</div>
                            
                            <div class="event-text"><a class="conferences" href="<?php echo get_site_url(); ?>/events-list/category/conferences/">Conferences</a></div>
                            Need New Text
                            
                            <?php return_upcoming_category_event('conferences');?>
                            
                            </div>
                            
                            <div class="event-block">
                            
                            <div class="event-image-left"><a href="<?php echo get_site_url(); ?>/events-list/category/screenings/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/EVENTS_screenings.jpg" align="alignleft" width="175" height="115" title="Screenings"/></a><br/><strong>MADE HERE</strong></div>
                            
                            <div class="event-text"><a class="screenings" href="<?php echo get_site_url(); ?>/events-list/category/screenings/">Screenings</a></div>
                            Need New Text
                         
                            <?php return_upcoming_category_event('screenings');?>
                            
                            </div>
                            <?php
	                    
	                    	wp_link_pages( "\t\t\t\t\t<div class='page-link'>" . __( 'Pages: ', 'thematic' ), "</div>\n", 'number' );
	                    
	                    	edit_post_link( __( 'Edit', 'thematic' ), "\n\t\t\t\t\t\t" . '<span class="edit-link">' , '</span>' . "\n" );
	                    ?>

					</div><!-- .entry-content -->
					
				</div><!-- #post -->
	
			<?php
				// action hook for inserting content below #post
	        	thematic_belowpost();
	        		        
       			// action hook for calling the comments_template
       			thematic_comments_template();
        		
	        	// end loop
        		endwhile;
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