<?php

/**
 * @file
 * Theme settings file for the Omni chi theme.
 */

require_once dirname(__FILE__) . '/template.php';

/**
 * Implements hook_form_FORM_alter().
 */
function omni_chi_form_system_theme_settings_alter(&$form, $form_state) {

	// add the formalize.js option to theme settings
	$form['theme_settings']['omni_chi_formalizejs'] = array(
		'#type' => 'checkbox',
		'#title' => 'Formalize JS',
		'#default_value' => omega_theme_get_setting('omni_chi_formalizejs', TRUE)
	);

	// add slicknav option to theme settings
	$form['theme_settings']['omni_chi_slicknav'] = array(
		'#type' => 'checkbox',
		'#title' => 'Slicknav',
		'#default_value' => omega_theme_get_setting('omni_chi_slicknav', TRUE)
	);

	// add option to remove annoying front page Welcome message
	$form['theme_settings']['omni_chi_welcomemsg'] = array(
		'#type' => 'checkbox',
		'#title' => 'Remove front welcome page',
		'#default_value' => omega_theme_get_setting('omni_chi_welcomemsg', FALSE)
	);
}
