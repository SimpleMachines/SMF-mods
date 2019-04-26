[size=4][b]Curve2 Color Changer[/b][/size]
[url=http://custom.simplemachines.org/mods/index.php?mod=0][b]Link to Mod[/b][/url]

[b][size=10pt]Compatibility[/size][/b]
For SMF 2.1.x

[b][size=10pt]Introduction[/size][/b]
Adds color settings for the the SMF2.1 default theme

[b][size=10pt]Installation[/size][/b]
Any previous versions of this mod MUST be uninstalled BEFORE installing this version.
This mod is mainly for the default theme, custom themes might be compatible depending on the author of the custom theme.

[b][size=10pt]Usage in custom themes (for theme authors)[/size][/b]
If you wish to make use of the mod and allow users to change colors in your theme, add an array with the following format to [b]template_init()[/b]

[code]<?php
$settings['color_changes'] = array(
	'COLOR_TYPE' => array(
		array(
			'elements' => '.ELEMENT, #ANOTHER_ELEMENT',
			'properties' => array('PROPERTY_NAME', 'ANOTHER_PROPERTY' => '{color}')
		)
		array(...)
	),
	...
);
[/code]

You can use one of the already declared color types :
[font=monospace]
'background', 'foreground', 'primary_color', 'secondary_color', 'top_section', 'footer', 'links', 'gradient_end', 'gradient_start', 'blocks_color', 'blocks_alternate_color', 'borders_color', 'buttons_text_color', 'buttons_bg', 'buttons_border', 'special_titles_color'
[/font]
or you can use a new color type, but you'll have to give it a text string in this format
[code]$txt['cc_COLOR_TYPE'] = 'STRING';[/code]
Properties will be given the value of the color, and you can also use [b]{color}[/b] and it will be replaced with the color's value.

example from the default theme:
[code]<?php
$settings['color_changes'] = array(
	'background' => array(
		array(
			'elements' => 'body',
			'properties' => array('background')
		)
	),
	'primary_color' => array(
		array(
			'elements' => 'div.cat_bar, .amt, .dropmenu li a:hover, .dropmenu li:hover a, .dropmenu li a:focus,
			#top_info > li > a:hover, #top_info > li:hover > a, #top_info > li > a.open, .button.active, .button.active:hover',
			'properties' => array('background', 'border-color')
		),
		array(
			'elements' => '#footer',
			'properties' => array('background')
		),
		array(
			'elements' => '.button.active, .button.active:hover',
			'properties' => array('color' => '#fff')
		)
	),
	'gradient_start' => array(
		array(
			'elements' => '.dropmenu li ul, .top_menu, .dropmenu li li:hover, .button, .dropmenu li li:hover > a, .dropmenu li li a:focus,
			.dropmenu li li a:hover, #top_section, #search_form .button, .quickbuttons li, .quickbuttons li ul, .quickbuttons li ul li:hover,
			.quickbuttons ul li a:focus, .popup_window, #inner_section',
			'properties' => array('background-image' => 'linear-gradient(to bottom, {color} 0%, transparent 70%)')
		),
		array(
			'elements' => '.button:hover, .quickbuttons li:hover, .navigate_section ul, .popup_content, .up_contain,
			.button:hover, #search_form .button:hover, .quickbuttons li:hover',
			'properties' => array('background-image' => 'linear-gradient(to bottom, transparent 0%, {color} 70%)')
		)
	),
);
[/code]

[b][size=10pt]Support[/size][/b]
Please use the modification thread for support with this modification.

[b][size=10pt]Changelog[/size][/b]
[font=monospace]• v1.0
	o Initial Release[/font]

Copyright (c) 2019, Simple Machines, under BSD 3-Clause License.
All rights reserved.