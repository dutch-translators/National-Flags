<?php

/**
*
*
* @package - National Flags language
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'FLAG'				=> 'Vlag',
	'FLAGS'				=> '%s Vlaggen',
	'USER_FLAG'			=> 'Vlag',
	'NATIONAL_FLAGS'	=> 'Vlaggen',	
	'FLAG_EXPLAIN'		=> 'Kies je Nationale Vlag.',
	'USER_NEEDS_FLAG'	=> 'Neem even een momentje om %sje profiel te bezoeken%s zodat je je nationale vlag kan kiezen.',
	'FLAGS_VIEWONLINE'	=> 'Bekijkt vlaggen',
	'FLAG_USER'			=> '%s Gebruiker',
	'FLAG_USERS'		=> '%s Gebruikers',
	'MUST_CHOOSE_FLAG'	=> 'Je moet een vlag kiezen.',
	'NO_SUCH_FLAG'		=> 'Kies alstublieft een vlag.',
	'NO_USER_HAS_FLAG'	=> 'Er zijn nog geen gebruikers met deze vlag',	
));
