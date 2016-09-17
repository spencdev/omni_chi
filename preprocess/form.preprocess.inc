<?php

function omni_chi_preprocess_form(&$vars) {
	// add formalize.js
	if (theme_get_setting('omni_chi_formalizejs', 'omni_chi')) {
		$theme_path = drupal_get_path('theme', 'omni_chi');
		drupal_add_js($theme_path . '/libraries/formalize/assets/js/jquery.formalize.min.js');
	}
}
