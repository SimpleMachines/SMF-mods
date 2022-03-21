<?php

/**
 * @package BBCode Dotted Underline
 * @author SMF Customization Team (www.simplemachines.org)
 * @license BSD 3-clause
 * @version 1.1.1
 */

if (!defined('SMF'))
	die('No direct access...');

/*
*	dottedunderline_bbc_add_code($codes)
*		- Called with integrate_bbc_codes
*		- Adds new bbc codes to existing array
*/	
function dottedunderline_bbc_add_code(&$codes)
{
	$codes[] = array(
		'tag' => 'dot',
		'before' => '<span style="border-bottom:1px dotted;">',
		'after' => '</span>',
	);
}

/*
*	dottedunderline_bbc_add_button($buttons)
*		- Called with integrate_bbc_buttons
*		- Adds new bbc buttons for use in the editor
*/
function dottedunderline_bbc_add_button(&$buttons)
{
	global $txt;
	$row_position = 1; // Which row are we adding the buttons on (starting at 1)
	$col_position = 3; // which col are we inserting the buttons

	// Define the new buttons
	$newbuttons = array(
		array(
			'image' => 'dot',
			'code' => 'dot',
			'before' => '[dot]',
			'after' => '[/dot]',
			'description' => $txt['dot']
		)
	);

	// Move from x,y coordinates to array values
	$row_position--;
	$col_position--;
	
	// Get the individual button rows
	foreach ($buttons as $sub_buttons)
		$button_row[] = $sub_buttons;

	// set the row bounds, not less than 0, not more than an extra row
	$total_rows = count($buttons);
	$row_position = min(max($row_position,0),$total_rows);

	// If the user specified a new row add one
	if ($row_position == $total_rows)
	{
		$button_row[$row_position] = array();
		$total_rows++;
	}

	// Set the col bounds, not less than 0 not more than the number of columns in this row
	$total_cols = count($button_row[$row_position]);
	$col_position = min(max($col_position,0),$total_cols);

	// Insert the new buttons in to the row and col specified
	array_splice($button_row[$row_position], $col_position, $total_cols, array_merge($newbuttons, array_slice($button_row[$row_position], $col_position))); 

	// join the button array back together
	$buttons = array();
	for ($i = 0; $i < $total_rows; $i++)
		$buttons[] = $button_row[$i];
}