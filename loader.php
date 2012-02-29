<?php
/**
 * Generate Package Loader object and related configuration
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

// Add some Core classes to the global DiC
_env('dic')->set_classes(array(
	'Loader:Closure'    => 'Fuel\\Core\\Loader\\Closure',
	'Loader:Lowercase'  => 'Fuel\\Core\\Loader\\Lowercase',
	'Request:Curl'      => 'Fuel\\Core\\Request\\Curl',
	'Security:Xss'      => 'Fuel\\Core\\Security\\String\\Xss',
	'View:Markdown'     => 'Fuel\\Core\\View\\Markdown',
	'View:Twig'         => 'Fuel\\Core\\View\\Twig',
));

// Forge and return the Core Package object
return _forge('Loader:Package')
	->set_path(__DIR__)
	->set_namespace('Fuel\\Core')
	->add_class_aliases(array(
		'Classes\\Controller\\Template'  => 'Fuel\\Core\\Controller\\Template',
		'Classes\\Request\\Curl'         => 'Fuel\\Core\\Request\\Curl',
		'Classes\\Route\\Task'           => 'Fuel\\Core\\Route\\Task',
		'Classes\\Task\\Base'            => 'Fuel\\Core\\Task\\Base',
	));
