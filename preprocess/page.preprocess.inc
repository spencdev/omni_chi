<?php

/**
 * Implements hook_preprocess_page().
 */
function omni_chi_preprocess_page(&$vars) {
	// get the current path
	$current_path = current_path();

	// icme launches an iframe and causes problems, so get out
	if (drupal_match_path($current_path, 'imce')) {
		return;
	}
	// add slicknav from cloudflare cdn.
	if (theme_get_setting('omni_chi_slicknav', 'omni_chi')) {
		$theme_path = drupal_get_path('theme', 'omni_chi');
		drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.4/jquery.slicknav.min.js', 'external');
		drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.4/slicknav.min.css', 'external');
		drupal_add_js($theme_path . '/js/omni_chi.slicknav.js');
	}
	// remove default welcome message
	if ($vars['is_front'] && theme_get_setting('omni_chi_welcomemsg', 'omni_chi')) {
		$vars['title'] = '';
	}
}
