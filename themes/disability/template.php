<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "disability" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "disability".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function disability_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.

  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function disability_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
function disability_preprocess_page(&$vars) {
  $vars['back_link'] = '';
  $front_page = $vars['front_page'];
  $url = explode('/', request_uri());
  $subsection = '';

  $vars['site_name'] = "<a class='disability' href='$front_page" . "cdo'>Disability @ UIOWA</a>";
  $vars['back_link'] = "<a id='back-link' href='$front_page'>Back to Disability@Iowa</a>";
  $vars['facebook'] = 'http://www.facebook.com/universityofiowa';
  $vars['twitter'] = 'https://twitter.com/uiowa';
  $vars['youtube'] = 'http://www.youtube.com/user/universityofiowa';
}

function disability_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function disability_preprocess_node(&$vars) {
}
function disability_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function disability_preprocess_comment(&$vars) {
}
function disability_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function disability_preprocess_block(&$vars) {
}
function disability_process_block(&$vars) {
}
// */
