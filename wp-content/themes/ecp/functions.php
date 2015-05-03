<?php
/**

 Functions
 
 */
 
 
//.................. BASIC FUNCTIONS .................. //

/* language include.*/
$lang = TEMPLATE_PATH . '/languages';
load_theme_textdomain('misfitlang', $lang);

//.................. BASIC FUNCTIONS .................. //

/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/simple_functions.php');


/* Include Super Furu Custom Options Panel*/
require_once(TEMPLATEPATH .  '/options/options_panel.php');


 /* ................. CUSTOM POST TYPES .................... */
/* Below is an include to a default custom post type.*/
include(TEMPLATEPATH . '/library/post_types.php');

 /* ................. SOME OPTIONS FOR POSTS .................... 
/* Below is an include to a few options for your posts.
include(TEMPLATEPATH . '/options/single-options.php');*/



 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.
include(TEMPLATEPATH . '/options/project-options.php'); */


 /* ................. CUSTOM FIELDS .................... */
/* Below is an include to a few options for your projects.
include(TEMPLATEPATH . '/library/custom_fields.php'); */



/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/shortcodes.php');


/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/widgets.php');


 /* ................. ADDITIONAL INFO FOR SHORTCODES .................... */
/* Below is an include to a few options for your projects.*/

define( 'SS_BASE_DIR', TEMPLATEPATH . '/' );
define( 'SS_BASE_URL', get_template_directory_uri() . '/' );

