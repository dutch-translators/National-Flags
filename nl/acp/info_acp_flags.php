<?php

/**
*
*
* @package - National Flags language
* @copyright (c) RMcGirr83
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
	//Module and page titles
	'ACP_CAT_FLAGS'						=> 'Nationale Vlaggen',
	'ACP_FLAGS'							=> 'Nationale Vlaggen',
	'ACP_FLAGS_EXPLAIN'					=> 'Hier kan je vlaggen toevoegoen, wijzigen en/of verwijderen <strong>Upload de afbeeldingen die je wilt gebruiken naar: ext/rmcgirr83/nationalflags/flags voordat je een nieuwe vlag toevoegt.</strong>',

	//Add/Edit Flags
	'FLAG_EDIT'							=> 'Vlag wijzigen',
	'FLAG_ADD'							=> 'Voeg nieuwe vlag toe',
	'FLAG_NAME'							=> 'Vlag naam',
	'FLAG_NAME_EXPLAIN'					=> 'De naam van de vlag. Als je ervoor kiest om de vlag als teskt weer te geven of beide, dan wordt de vlag zoals hier ingesteld weergegeven',
	'FLAG_IMG'							=> 'Afbeeldingsnaam',
	'FLAG_IMG_EXPLAIN'					=> 'De naam van de afbeelding. bijvoorbeeld: NL.gif. Nieuwe afbeeldingen moeten worden geupload naar ext/rmcgirr83/nationalflags/flags<br />Als je geen afbeelding wilt gebruiken, laat dit veld dan leeg.',
	'FLAG_IMAGE'						=> 'Vlag afbeelding',

	//Settings
	'ACP_FLAG_SETTINGS'					=> 'Nationale vlag instellingen',
	'YES_FLAGS'							=> 'Vlaggen inschakelen',
	'YES_FLAGS_EXPLAIN'					=> 'Schakel de vlaggen in/uit',
	'FLAG_TYPE'							=> 'Weergave',
	'FLAG_TYPE_EXPLAIN'					=> 'Kies hoe je de vlag wilt weergeven.',
	'FLAG_TEXT'							=> 'Tekst',
	'FLAG_IMAGE'						=> 'Afbeelding',
	'FLAG_BOTH'							=> 'Beide',
	'FLAGS_VERSION'						=> 'National Flags Versie',
	'FLAGS_ON_REG'						=> 'Vlaggen bij registratie',
	'FLAGS_ON_REG_EXPLAIN'				=> 'Indien ja is ingesteld, worden nieuwe leden verplicht om een vlag te kiezen bij hun registratie',
	'FLAGS_DISPLAY_MSG'					=> 'Bericht weergeven',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Indien ja is ingesteld, zal er een bericht op het forum worden weergegeven om gebruikers een vlag te laten kiezen',

	//Logs, messages and errors
	'LOG_FLAGS_DELETED'					=> '%1$s vlag verwijderd',
	'LOG_FLAG_EDIT'						=> '%1$s vlag bijgewerkt',
	'LOG_FLAG_ADD'						=> '%1$s vlag toegevoegd',
	'MSG_FLAGS_DELETED'					=> 'De vlag is sucesvol verwijderd.',
	'MSG_CONFIRM'						=> 'Weet je zeker dat je deze vlag wilt verwijderen?',
	'MSG_FLAG_CONFIRM_DELETE'			=> '<br /><strong>%d</strong> Een gebruiker heeft deze vlag, als je deze vlag verwijderd zal deze gebruiker een andere vlag moeten kiezen.',
	'MSG_FLAGS_CONFIRM_DELETE'			=> '<br /><strong>%d</strong> Er zijn gebruikers die deze vlag hebben ingesteld, ls je deze vlag verwijderd zullen deze gebruikers een andere vlag moeten kiezen .',
	'MSG_FLAG_EDITED'					=> 'De vlag is succesvol gewijzigd.',
	'MSG_FLAG_ADDED'					=> 'De vlag is succesvol toegevoegt.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Er is geen vlag naam ingevoerd, dit is een verplicht veld.',
	'FLAG_ERROR_NOT_EXIST'				=> 'De geselecteerde vlag bestaat niet.',
	'FLAG_CONFIG_SAVED'					=> 'De vlag instellingen zijn succesvol bijgewerkt',
	'FLAG_NAME_EXISTS'					=> 'Er bestaat al en vlag met dezelfde naam',

));
