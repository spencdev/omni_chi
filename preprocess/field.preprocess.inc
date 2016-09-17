<?php

function omni_chi_preprocess_field(&$vars) {
	// check for Display Suite fields.
	if ($vars['element']['#field_type'] != 'ds') {
		return;
	}
	switch ($vars['element']['#field_name']) {
		case 'post_date':
			// let's just handle nodes for now.
			if ($vars['element']['#entity_type'] != 'node') {
				break;
			}
			$node = $vars['element']['#object'];
			// create the datetime value for the time element from
			// the node's created time..
			$vars['datetime'] = date_iso8601($node->created);
		break;
	}
}
