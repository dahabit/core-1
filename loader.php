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
$env->dic->set_classes(array(
	'Debug'                => 'Fuel\\Core\\Debug',
	'Error'                => 'Fuel\\Core\\Error',
	'Loader:Closure'       => 'Fuel\\Core\\Loader\\Closure',
	'Loader:Lowercase'     => 'Fuel\\Core\\Loader\\Lowercase',
	'Profiler'             => 'Fuel\\Core\\Profiler',
	'Request:Curl'         => 'Fuel\\Core\\Request\\Curl',
	'Security_String:Xss'  => 'Fuel\\Core\\Security\\String\\Xss',
	'View:Markdown'        => 'Fuel\\Core\\View\\Markdown',
	'View:Twig'            => 'Fuel\\Core\\View\\Twig',
));

// Forge and return the Core Package object
return $env->forge('Loader:Package')
	->set_path(__DIR__)
	->set_namespace(false)
	->add_classes(array(
		'Fuel\\Core\\Controller\\Template' => __DIR__.'/classes/Controller/Template.php',
		'Fuel\\Core\\Loader\\Closure' => __DIR__.'/classes/Loader/Closure.php',
		'Fuel\\Core\\Loader\\Lowercase' => __DIR__.'/classes/Loader/Lowercase.php',
		'Fuel\\Core\\Parser\\Markdown' => __DIR__.'/classes/Parser/Markdown.php',
		'Fuel\\Core\\Parser\\Twig' => __DIR__.'/classes/Parser/Twig.php',
		'Fuel\\Core\\Presenter\\Base' => __DIR__.'/classes/Presenter/Base.php',
		'Fuel\\Core\\Request\\Curl' => __DIR__.'/classes/Request/Curl.php',
		'Fuel\\Core\\Security\\String\\Xss' => __DIR__.'/classes/Security/String/Xss.php',
		'Fuel\\Core\\Debug' => __DIR__.'/classes/Debug.php',
		'Fuel\\Core\\Error' => __DIR__.'/classes/Error.php',
		'Fuel\\Core\\Profiler' => __DIR__.'/classes/Profiler.php',
	))
	->add_class_aliases(array(
		'Classes\\Controller\\Template'  => 'Fuel\\Core\\Controller\\Template',
		'Classes\\Presenter\\Base'       => 'Fuel\\Core\\Presenter\\Base',
		'Classes\\Request\\Curl'         => 'Fuel\\Core\\Request\\Curl',
	));
