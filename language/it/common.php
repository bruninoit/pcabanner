<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ACP_BANNER_TITLE'			=> 'Gestione banner',
	'ACP_BANNER_CATEGORY'			=> 'Banner',
	'BANNER_HEADER'			=> 'Banner in tutte le pagine in alto',
	'BANNER_FOOTER'			=> 'Banner in tutte le pagine in basso',
	'BANNER_POST'			=> 'Banner in tutti i topic dopo il primo messaggio',
  
));
