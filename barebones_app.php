<?php
// Basic app setup using Joomla 3.x CMS libraries
define('_JEXEC', 1);
define('JPATH_BASE', $_SERVER['DOCUMENT_ROOT'] . '' );
define('DS', DIRECTORY_SEPARATOR);

require_once(JPATH_BASE . '/includes/defines.php');
require_once(JPATH_BASE . '/includes/framework.php');

$app			= JFactory::getApplication('site');
$app->initialise();
$db				= JFactory::getDbo();
$session	= JFactory::getSession();
$user			= JFactory::getUser();
$sitename	= $app->get('sitename');
$website	= JUri::base();
$website	= str_ireplace('/path/to/file/', '/', $website); // Get rid of unwanted path information

/**
 * Classes unavailable without mainframe:
 * JDocument
 */