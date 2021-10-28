[center][size=1.7em][color=purple][b]Curve2 Color Changer[/b][/color][/size][/center]

[hr]
[b]Supported Languages:[/b] English
[url=https://custom.simplemachines.org/mods/index.php?mod=4231][b]Link To Mod[/b][/url] | [url=https://www.simplemachines.org/community/index.php?topic=567270.0][b]Mod Discussion[/b][/url] | [url=https://custom.simplemachines.org/mods/index.php?action=profile;u=1][b]Other SMF Customization Team Mods[/b][/url]
[hr]

[color=purple][b]Compatibility[/b][/color]
For SMF 2.1.x

[color=purple][b]Introduction[/b][/color]
Adds color settings for the the SMF 2.1 default theme

[color=purple][b]Installation[/b][/color]
Any previous versions of this mod MUST be uninstalled BEFORE installing this version.
This mod is mainly for the default theme, custom themes might be compatible depending on the author of the custom theme.

[color=purple][b]Usage in custom themes (for theme authors)[/b][/color]
If you wish to make use of the mod and allow admins to change colors in your theme, add an array with the following format to [b]template_init()[/b]

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

[color=purple][b]Support[/b][/color]
Please use the modification thread for support with this modification.

[color=purple][b]Changelog[/b][/color]
[b]Version 1.3 - 27 October 2021[/b]
- Check against theme authors having defined color palette/s for their theme
- Fixed problems with default colors

[b]Version 1.2.2 - 27 October 2021[/b]
- Check if there are any default settings first

[b]Version 1.2.1 - 10 October 2021[/b]
- Insert default settings if not set

[b]Version 1.2 - 24 August 2021[/b]
- Fixed 'Remove shadows' option
- Set a default color on all of the palettes
- Fixed button color on "focus" state

[b]Version 1.1 - 23 August 2021[/b]
- Fixed default palette
- Adds labels for palettes
- Added default curve palette
- Added Russian translation

[b]Version 1.0 - April 2019[/b]
- Initial Release


Copyright (c) 2021, Simple Machines, under BSD 3-Clause License.
All rights reserved.