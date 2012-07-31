<?php
/**
 * MESTC Child Theme Functions
 *
 * This file supplements the functions defined in THEMATIC to allow for specific MESTC functionality.
 *
 * @link http://docs.thematictheme.com
 *
 * @package MESTC
 * @subpackage ThemeInit
 */


// Unleash the power of Thematic's dynamic classes
// 
define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
define('THEMATIC_COMPATIBLE_FEEDLINKS', true);


global $page;
global $post;

//Add Favicon

function childtheme_favicon() { ?>
    <link rel="shortcut icon" href="http://php.dev/MESTCDev/wp-content/themes/mestc/library/images/favicon.ico">
<?php }

add_action('wp_head', 'childtheme_favicon');


	
// Replace Blog Title with MESTC logo

function childtheme_override_blogtitle(){
		$MESTCimagedir = get_stylesheet_directory_uri();
		$MESTCimagedir .= '/library/images/';
		if (is_page('4')){
		?>
	  	<div id="MESTC-image"><span><a href="<?php echo home_url() ?>/" title="Martin E. Segal Theatre Center" rel="home"><img
src="<?php echo $MESTCimagedir ?>MESTCBIG.png" height="175px" width="225px"></a></span></div><?php		
		}
		else {
	    ?>
    	<div id="MESTC-image"><span><a href="<?php echo home_url() ?>/" title="Martin E. Segal Theatre Center" rel="home"><img
src="<?php echo $MESTCimagedir ?>MESTC.png" height="134px" width="170px"></a></span></div>  
    <?php 
	}
}

add_action('thematic_header','thematic_blogtitle',3);    



// Register the new menus
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'home-menu' => __( 'Home Menu' ),
			'events-menu' => __( 'Events Menu' ),
	        'books-journals-menu' => __( 'Books & Journals Menu' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );



//Conditional Assignment of Secondary Menu Based on Category
function secondary_header_menu() {
	if (tribe_is_event() || in_category('events')) {
         wp_nav_menu( array( 'theme_location' => 'events-menu',
				'container_id'=>'secondary-header-menu',
				'container_class' => 'clearfix ',
                'menu_class' => 'sf-menu', // we assign the sf-menu class to the menu ul so that superfish works on this menu too       
				) );
	}
	elseif (in_category('books-journals' )) {
         wp_nav_menu( array( 'theme_location' => 'books-journals-menu',
				'container_id'=>'secondary-header-menu',
				'container_class' => 'clearfix ',
                'menu_class' => 'sf-menu', // we assign the sf-menu class to the menu ul so that superfish works on this menu too
                ) );
	}
	else {
		  wp_nav_menu( array( 'theme_location' => 'home-menu',
				'container_id'=>'secondary-header-menu',
				'container_class' => 'clearfix ',
                'menu_class' => 'sf-menu', // we assign the sf-menu class to the menu ul so that superfish works on this menu too
                ) );
	}	
}

add_action('thematic_header','top_menu');



// Assign Background image to Headers and Add Secondary Header Menu
function childtheme_override_access(){ 
	$MESTCimagedir = get_stylesheet_directory_uri();
	$MESTCimagedir .= '/library/images/';
	if (is_page('4')) { ?>
	<div id="access"> <?php
    } 	
    else { 
        if (tribe_is_event() || in_category('events')) {
            $headerimage = 'MESTCEventHeader.png';
        }
        elseif (in_category('books-journals' )) {
            $headerimage = 'MESTCBJHeader.png';
        }
        else {
            $headerimage = 'MESTCHomeHeader.png';
        }
	    ?>
        <div id="access" style="background: url('<?php echo $MESTCimagedir.$headerimage ?>') no-repeat"> <?php
    }
	if ( ( function_exists("has_nav_menu") ) && ( has_nav_menu( apply_filters('thematic_primary_menu_id', 'primary-menu') ) ) ) {
    	    echo  wp_nav_menu(thematic_nav_menu_args());
    	} else {
    	    echo  thematic_add_menuclass(wp_page_menu(thematic_page_menu_args()));	
    	}
    if (!is_page('4')){
		secondary_header_menu();}?>
    </div><!-- #access -->
    <?php 
}
add_action('thematic_header','thematic_access',9);



/* IMPORTANT !
* This function registers the same custom post type as the The Events Calendar plugin
* http://wordpress.org/extend/plugins/the-events-calendar/
* This also registers WordPress' native categories and tags while associating them with the Events Calendar Plugin
*/
add_action( 'init', 'add_calendar_taxonomy', 0 );

function add_calendar_taxonomy() {

register_post_type('tribe_events',array( // Registers Events Calendar Custom Post Type

'taxonomies' => array('category') // This registers the native WordPress taxonomies with The Events Calendar

));

}



// Randomizes background of Index page and adds caption and photo credits

function randomize_index_background () {
	if (is_page('4')){
	$background_images[0] = 'MESTCBG1.png';
	$background_images[1] = 'MESTCBG2.png';
	$background_images[2] = 'MESTCBG3.png';
	$background_images[3] = 'MESTCBG4.png';
	$background_images[4] = 'MESTCBG5.png';
	$background_images[5] = 'MESTCBG6.png';
	$background_images[6] = 'MESTCBG7.png';
	$background_images[7] = 'MESTCBG8.png';
	$background_images[8] = 'MESTCBG9.png';

	$captions[0] = 'captionbg01.png';
	$captions[1] = 'captionbg02.png';
	$captions[2] = 'captionbg03.png';
	$captions[3] = 'captionbg04.png';
	$captions[4] = 'captionbg05.png';
	$captions[5] = 'captionbg06.png';
	$captions[6] = 'captionbg07.png';
	$captions[7] = 'captionbg08.png';	
	$captions[8] = 'captionbg09.png';

	$credits[0] = 'photo: Rachel Roberts/MESTC Archive';
	$credits[1] = 'photo: Rachel Roberts/MESTC Archive';
	$credits[2] = 'photo: Rachel Roberts/MESTC Archive';
	$credits[3] = 'photo: Julien Jourdes/MESTC Archive';
	$credits[4] = 'photo: courtesy of Carl Hancock Rux';
	$credits[5] = 'photo: Rachel Roberts/MESTC Archive';
	$credits[6] = 'photo: Julien Jourdes/MESTC Archive';
	$credits[7] = 'photo: Jared Asato';
	$credits[8] = 'photo: Rachel Roberts/MESTC Archive';

	$randomnum = rand(0, 8);
	
	$MESTCimagedir = get_stylesheet_directory_uri();
	$MESTCimagedir .= '/library/images/bgs/';
	
    ?><div id="bgpic">
		<img border="0" width="100%" src="<?php echo $MESTCimagedir.$background_images[$randomnum]?>">
		
        <div id="caption">
			<img border="0" src="<?php echo $MESTCimagedir.$captions[$randomnum]?>">
		</div>	

	</div>
	
    <div id="credits">
		<span class="credits"><?php echo $credits[$randomnum]?></span>
	</div>
	<?php
	}
}

add_action ('thematic_before', 'randomize_index_background', 1);
	
	
	
// add category nicenames in body and post class

/**
 * Generates semantic classes for BODY element
 *
 * @param bool $print (default: true)
 */
function childtheme_override_body_class( $print = true ) {
		global $wp_query, $current_user, $blog_id, $post, $taxonomy;
	    
	    $c = array();
	
		if ( apply_filters('thematic_show_bc_wordpress', TRUE ) ) {
	        // It's surely a WordPress blog, right?
	        $c[] = 'wordpress';
	    }
	    
	    if ( apply_filters( 'thematic_show_bc_blogid', TRUE) ) {
	    	// Applies the blog id to BODY element .. blog-id1 for WordPress < 3.0
	    	$c[] = 'blogid-' . $blog_id;
	    }
	
		if ( apply_filters( 'thematic_show_bc_datetime', TRUE) ) {
	        // Applies the time- and date-based classes (below) to BODY element
	        thematic_date_classes( time(), $c );
	    }
	
	    if ( apply_filters( 'thematic_show_bc_contenttype', TRUE ) ) {
	        // Generic semantic classes for what type of content is displayed
	        is_front_page()  ? $c[] = 'home'       : null; // For the front page, if set
	        is_home()        ? $c[] = 'blog'       : null; // For the blog posts page, if set
	        is_archive()     ? $c[] = 'archive'    : null;
	        is_date()        ? $c[] = 'date'       : null;
	        is_search()      ? $c[] = 'search'     : null;
	        is_paged()       ? $c[] = 'paged'      : null;
	        is_attachment()  ? $c[] = 'attachment' : null;
	        is_404()         ? $c[] = 'four04'     : null; // CSS does not allow a digit as first character
	    }
	
	    if ( apply_filters( 'thematic_show_bc_singular', TRUE) ) {
	        // Special classes for BODY element when a singular post
	        if ( is_singular() ) {
	            $c[] = 'singular';
	        } else {
	            $c[] = 'not-singular';
	        }
	    }
	
		// Special classes for BODY element when a single post
		if ( is_single() && apply_filters( 'thematic_show_bc_singlepost', TRUE ) ) {
			$postID = $wp_query->post->ID;
			the_post();
	
	        // Adds post slug class, prefixed by 'slug-'
	        $c[] = 'slug-' . $wp_query->post->post_name;
	
			// Adds 'single' class and class with the post ID
			$c[] = 'single postid-' . $postID;
	
			// Adds classes for the month, day, and hour when the post was published
			if ( isset( $wp_query->post->post_date ) )
				thematic_date_classes( mysql2date( 'U', $wp_query->post->post_date ), $c, 's-' );
	
			// Adds category classes for each category on single posts
			if ( $cats = get_the_category() )
				foreach ( $cats as $cat )
					$c[] = 's-category-' . $cat->slug;

			// Adds tag classes for each tag on single posts
			if ( $tags = get_the_tags() )
				foreach ( $tags as $tag )
					$c[] = 's-tag-' . $tag->slug;

			// Adds taxonomy classes for each term on single posts
			$single_post_type = get_post_type_object( get_post_type( $post->ID ) );
			
			// Check for post types without taxonomy inclusion
			if ( isset( $single_post_type->taxonomy ) ) {
			    if ( $tax = get_the_terms( $post->ID, get_post_taxonomies() ) ) {
			    	foreach ( $tax as $term )   { 
			    		// Remove tags and categories from results
			    		if  ( $term->taxonomy != 'post_tag' )	{
			    			if  ( $term->taxonomy != 'category' )   { 
			    				$c[] = 's-tax-' . $term->taxonomy;
			    				$c[] = 's-' . $term->taxonomy . '-' . $term->slug;
			    			}
			    		}
			    	}
			    }
			}
			
			// Adds MIME-specific classes for attachments
			if ( is_attachment() ) {
				$mime_type = get_post_mime_type();
				$mime_prefix = array( 'application/', 'image/', 'text/', 'audio/', 'video/', 'music/' );
					$c[] = 'attachmentid-' . $postID . ' attachment-' . str_replace( $mime_prefix, "", "$mime_type" );
			}
	
			// Adds author class for the post author
			$c[] = 's-author-' . sanitize_title_with_dashes( strtolower( get_the_author_meta( 'user_nicename', $post->post_author ) ) );
			rewind_posts();
			
			// For posts with excerpts
			if ( has_excerpt() )
				$c[] = 's-has-excerpt';
				
			// For posts with comments open or closed
			if ( comments_open() ) {
				$c[] = 's-comments-open';		
			} else {
				$c[] = 's-comments-closed';
			}
		
			// For posts with pings open or closed
			if ( pings_open() ) {
				$c[] = 's-pings-open';
			} else {
				$c[] = 's-pings-closed';
			}
		
			// For password-protected posts
			if ( $post->post_password )
				$c[] = 's-protected';
		
			// For sticky posts
			if ( is_sticky() )
			   $c[] = 's-sticky';		
			
		}
	
		// Author name classes for BODY on author archives
		elseif ( is_author() && apply_filters( 'thematic_show_bc_authorarchives', TRUE ) ) {
			$author = $wp_query->get_queried_object();
			$c[] = 'author';
			$c[] = 'author-' . $author->user_nicename;
		}
	
		// Category name classes for BODY on category archvies
		elseif ( is_category() && apply_filters( 'thematic_show_bc_categoryarchives', TRUE ) ) {
			$cat = $wp_query->get_queried_object();
			$c[] = 'category';
			$c[] = 'category-' . $cat->slug;
		}
	
		// Tag name classes for BODY on tag archives
		elseif ( is_tag() && apply_filters('thematic_show_bc_tagarchives', TRUE ) ) {
			$tags = $wp_query->get_queried_object();
			$c[] = 'tag';
			$c[] = 'tag-' . $tags->slug;
		}
		
		// Taxonomy name classes for BODY on tag archives
		
		elseif ( is_tax() && apply_filters( 'thematic_show_bc_taxonomyarchives', TRUE) ) {
			$c[] = 'taxonomy';
			$c[] = 'tax-' . $taxonomy;
			$c[] = $taxonomy . '-' . strtolower(thematic_get_term_name());
		}
	
		// Page author for BODY on 'pages'
		elseif ( is_page() && apply_filters( 'thematic_show_bc_pages', TRUE ) ) {
			$pageID = $wp_query->post->ID;
			$page_children = wp_list_pages( "child_of=$pageID&echo=0" );
			the_post();
	
	        // Adds post slug class, prefixed by 'slug-'
	        $c[] = 'slug-' . $wp_query->post->post_name;
	
			$c[] = 'page pageid-' . $pageID;
			
			$c[] = 'page-author-' . sanitize_title_with_dashes( strtolower( get_the_author_meta( 'user_nicename', $post->post_author) ) );
			
			// Checks to see if the page has children and/or is a child page; props to Adam
			if ( $page_children )
				$c[] = 'page-parent';
			if ( $wp_query->post->post_parent )
				$c[] = 'page-child parent-pageid-' . $wp_query->post->post_parent;
				
			// For pages with excerpts
			if ( has_excerpt() )
				$c[] = 'page-has-excerpt';
				
			// For pages with comments open or closed
			if ( comments_open() ) {
				$c[] = 'page-comments-open';		
			} else {
				$c[] = 'page-comments-closed';
			}
		
			// For pages with pings open or closed
			if ( pings_open() ) {
				$c[] = 'page-pings-open';
			} else {
				$c[] = 'page-pings-closed';
			}
		
			// For password-protected pages
			if ( $post->post_password )
				$c[] = 'page-protected';			
				
			// Checks to see if the page is using a template	
			if ( is_page_template() & !is_page_template('default') )
				$c[] = 'page-template page-template-' . str_replace( '.php', '-php', get_post_meta( $pageID, '_wp_page_template', true ) );
			rewind_posts();
		}
	
		// Search classes for results or no results
		elseif ( is_search() && apply_filters( 'thematic_show_bc_search', TRUE ) ) {
			the_post();
			if ( $wp_query->found_posts > 0 ) {
				$c[] = 'search-results';
			} else {
				$c[] = 'search-no-results';
			}
			rewind_posts();
		}
	
		if ( apply_filters( 'thematic_show_bc_loggedin', TRUE ) ) {
	        // For when a visitor is logged in while browsing
	        if ( $current_user->ID )
	            $c[] = 'loggedin';
	    }
	
	 // Paged classes; for page x > 1 classes of index and all post types etc.
		if ( isset( $post ) && apply_filters( 'thematic_show_bc_pagex', TRUE ) ) {
			if ( ( ( ( $page = $wp_query->get( 'paged' ) ) || ( $page = $wp_query->get('page') ) ) && $page > 1 ) ) {
				// Thanks to Prentiss Riddle, twitter.com/pzriddle, for the security fix below. 
				$page = intval( $page ); // Ensures that an integer (not some dangerous script) is passed for the variable
 					$c[] = 'paged-' . $page;
 				if ( thematic_is_custom_post_type() ) {
 							$c[] = str_replace( '_','-',$post->post_type ) . '-paged-' . $page;
 					} elseif ( is_single() && $post->post_type=="post"  ) {
				        $c[] = 'single-paged-' . $page;
					} elseif ( is_page() ) {
				        $c[] = 'page-paged-' . $page;
					} elseif ( is_category() ) {
				        $c[] = 'category-paged-' . $page;
					} elseif ( is_tag() ) {
				        $c[] = 'tag-paged-' . $page;
					} elseif ( is_tax() ) {
				        $c[] = 'taxonomy-paged-' . $page;
					} elseif ( is_date() ) {
				        $c[] = 'date-paged-' . $page;
					} elseif ( is_author() ) {
				        $c[] = 'author-paged-' . $page;
					} elseif ( is_search() ) {
				        $c[] = 'search-paged-' . $page;
 				} 
 			// Paged classes; for page x = 1	For all post types
 			} elseif ( strpos( $post->post_content, '<!--nextpage-->') )  { 
 				if ( thematic_is_custom_post_type() ) {
				    	$c[] = str_replace( '_','-',$post->post_type ) . '-paged-1';
 				    } elseif (is_page()) {
				    	$c[] = 'page-paged-1';
 				    } elseif (is_single())  {
				    	$c[] = 'single-paged-1';
				}
  			}
  		}
		
		// Special Class if part of Events Calendar
		
		if (tribe_is_event() || tribe_is_venue()){
			$c[] = 'events-calendar';
		}
		
		// Add Category to Body Classes
		
		foreach((get_the_category($post->ID)) as $category)
		    $c[] = $category->category_nicename;
	
		// Separates classes with a single space, collates classes for BODY
		$c = join( ' ', apply_filters( 'thematic_body_class',  $c ) ); // Available filter: thematic_body_class
	
		// And tada!
		return $print ? print($c) : $c;
	}


	
// Add Events List and Calendar Button to Events Page

function add_calendar_buttons() {
	if (is_page('21')){
		?><div id="tribe-events-calendar-header" class="clearfix">
			<span class="tribe-events-calendar-buttons"><a class="tribe-events-button-off" href="http://php.dev/MESTCDev/events-list/upcoming/">Event List</a>
			<a class="tribe-events-button-off" href="http://php.dev/MESTCDev/events-list/month/">Calendar</a>
			</span>
		</div><?php
	}
}
add_action ('thematic_abovecontent', 'add_calendar_buttons', 1);


// This returns the upcoming event for each category on the Events page

function return_upcoming_category_event($upcomingcategory){
	$all_events = tribe_get_events(
        array(
            'eventDisplay'=>'upcoming',
            'posts_per_page'=>1,
            'tax_query'=> array(
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                    'terms' => $upcomingcategory
                )
            )
    )
    );

    foreach($all_events as $post) {
    setup_postdata($post);
    $space = false; 
	$output = '';
	$key="short-title"; 
	?>
	<hr class="next-event">
    <dl class="upcoming-event"> 
		<dt class="when-event <?php echo $class ?> "><b>Next Event:</b> <?php echo tribe_get_start_date($post->ID, false ); ?>&nbsp;-&nbsp;</dt>
		<dd class="what-event"><a href="<?php echo get_permalink($post->ID)?>" class="<?php echo $upcomingcategory ?>"><?php echo get_post_meta($post->ID, $key, true); ?></a></dd>
	</dl>
    <?php } //endforeach ?>
        <?php wp_reset_query(); 
}


// This generates the season Calendar-at-a-Glance for the Events page

function events_page_side_calendar () {
	$key="short-title";

	if (is_page('events')){
		$get_posts = tribe_get_events(
	        array(
	            'eventDisplay'=>'upcoming',
	            'tax_query'=> array(
	                array(
	                    'taxonomy' => 'tribe_events_cat',
	                    'field' => 'slug',
	                    'terms' => 'current-season'
	                )
	            )
	    )
	    );
?>
	<div id="events-at-a-glance">
	<h1 class="events-sidecal-header">SEASON AT A GLANCE</h1>
	<?php if (!empty($get_posts)){ ?>
	<h2 class="events-sidecal-subheader">Upcoming Events:</h2>
	<dl class="events-sidecal-event">
	<?php

	$month = date('F');
	$showmonth = false;
	$monthcount = 0;

	foreach($get_posts as $eventpost) { 
		setup_postdata($eventpost);
		$eventmonth = tribe_get_start_date( $eventpost->ID, false, 'F' );
		
		if ($eventmonth != $month){
			$month = $eventmonth;
			$showmonth = true;

		} //end if
	
		if ($monthcount == 0 || $showmonth == true){
			$monthheader = '<h2 class="events-sidecal-month">';
			$monthheader .= $month;
			$monthheader .= '</h2>';
			echo $monthheader;				
		} // endif
		
		$showmonth = false;
		$monthcount = 1;
		$event_id = $eventpost->ID;
		
		if (tribe_event_in_category('us-theatre', $event_id)) {
			$eventcat = 'us-theatre';
		}
		elseif (tribe_event_in_category('international-theatre', $event_id))  {
			$eventcat = 'international-theatre';
		}
		elseif (tribe_event_in_category('publication-theatre', $eventpost->ID)) {
			$eventcat = 'publication-theatre';
		}
		elseif (tribe_event_in_category('conferences', $eventpost->ID)) {
			$eventcat = 'conferences';
		}
		elseif (tribe_event_in_category('screenings', $eventpost->ID)) {
			$eventcat = 'screenings';
		} // endif
		?>
		
        <dt class="event-short-date"><?php echo tribe_get_start_date( $eventpost->ID, false, 'M j' );?></dt>
        <dd class="event-short-title <?php echo $eventcat; ?>"><a href="<?php echo get_permalink($eventpost->ID); ?>" id="post-<?php echo $eventpost->ID ?>"><?php echo get_post_meta($eventpost->ID, $key, true); ?></a>
		</dd>
<?php } //endforeach ?>

    </dl>
    <?php 
	}
		$get_oldposts = tribe_get_events(
	        array(
	            'eventDisplay'=>'past',
	            'tax_query'=> array(
	                array(
	                    'taxonomy' => 'tribe_events_cat',
	                    'field' => 'slug',
	                    'terms' => 'current-season'
	                )
	            )
	    )
	    );
	
		
	$get_oldposts = array_reverse($get_oldposts);
	
	if (!empty($get_oldposts)){
	?>

		<h2 class="events-sidecal-subheader2">Past Events:</h2>
		<dl class="events-sidecal-event"><?php
		
		$month = 'none';	
		$showmonth = false;

		foreach($get_oldposts as $eventpost) { 
			setup_postdata($eventpost); 
			$eventmonth = tribe_get_start_date( $eventpost->ID, false, 'F' );

			if ($eventmonth != $month){
				$month = $eventmonth;
				$showmonth = true;
			} //end if
		
			if ($showmonth == true){
				$monthheader = '<h2 class="events-sidecal-month">';
				$monthheader .= $month;
				$monthheader .= '</h2>';
				echo $monthheader;				
			} // endif
			
			$showmonth = false;
			
			if (tribe_event_in_category('us-theatre', $eventpost->ID)) {
				$eventcat = 'us-theatre';
			}
			elseif (tribe_event_in_category('international-theatre', $eventpost->ID))  {
				$eventcat = 'international-theatre';
			}
			elseif (tribe_event_in_category('publication-theatre', $eventpost->ID))  {
				$eventcat = 'publication-theatre';
			}
			elseif (tribe_event_in_category('conferences', $eventpost->ID)) {
				$eventcat = 'conferences';
			}
			elseif (tribe_event_in_category('screenings', $eventpost->ID)) {
				$eventcat = 'screenings';
			} // endif
			?>
			
			<dt class="event-short-date"><?php echo tribe_get_start_date( $eventpost->ID, false, 'M j' );?></dt>
	        <dd class="event-short-title <?php echo $eventcat; ?>"><a href="<?php echo get_permalink($eventpost->ID); ?>" id="post-<?php echo $eventpost->ID ?>"><?php echo get_post_meta($eventpost->ID, $key, true); ?></a>
			</dd>
				<?php
			
 		} //endforeach ?>

	    </dl>
	    
	<?php
	}
	?>
	</div>
	<?php wp_reset_query();
}
}

add_action('thematic_belowmainasides', 'events_page_side_calendar', 1);

		

function category_side_calendar() {
	global $post;
	if (tribe_is_event($post->ID)){
		   	if (in_category('cat_us-theatre')) {
				$categorycal = 'us-theatre';
				$categorynicecal = 'US Theatre';
			}
			elseif (in_category('cat_international-theatre'))  {
				$categorycal = 'international-theatre';
				$categorynicecal = 'International Theatre';
			}
			elseif (in_category('cat_publication-theatre'))  {
				$categorycal = 'publication-theatre';
				$categorynicecal = 'Publications';
			}
			elseif (in_category('cat_conferences')) {
				$categorycal = 'conferences';
				$categorynicecal = 'Conferences';
			}
			elseif (in_category('cat_screenings')) {
				$categorycal = 'screenings';
				$categorynicecal = 'Screenings';
			}//endif
			
		$get_eventposts = tribe_get_events(
				array(
					'eventDisplay'=>'all',
		            'tax_query'=> array(
		                array(
							'taxonomy' => 'tribe_events_cat',
							'field' => 'slug',
							'terms' => $categorycal			
		            			)
		    		)
		)    
		);
			
	    $key = 'short-title'; ?>
			<div id="category-side-cal">
			<h1 class="events-sidecal-header"><?php echo $categorynicecal ?> Calendar</h1>
			<dl class="events-sidecal"><?php

			foreach($get_eventposts as $eventpost) { 
					?>
			        <dt class="event-short-date"><?php echo tribe_get_start_date( $eventpost->ID, false, 'M j' );?></dt>
			        <dd class="event-short-title"><a href="<?php echo get_permalink($eventpost->ID); ?>" id="post-<?php echo the_ID(); ?>"><?php echo get_post_meta($eventpost->ID, $key, true); ?></a></dd>
		<?php
		} //endforeach ?>

		    </dl>
		    </div>
		<?php wp_reset_query();
		}
	}
		

add_action('thematic_belowmainasides', 'category_side_calendar', 1);