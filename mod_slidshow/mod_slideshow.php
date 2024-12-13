<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

// Add styles and scripts
$document = Factory::getDocument();
$document->addStyleSheet(Uri::base() . 'modules/mod_slideshow/styles.css');
$document->addScript(Uri::base() . 'modules/mod_slideshow/script.js');

// Load the layout
require JModuleHelper::getLayoutPath('mod_slideshow', 'default');
