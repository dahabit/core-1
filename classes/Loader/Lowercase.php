<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

namespace Fuel\Core\Loader;
use Classes\Loader\Package;

/**
 * Package loader that lowercases the PSR-0 translation of a classname.
 * (compatible with Fuel 1.x)
 *
 * @package  Fuel\Core
 *
 * @since  2.0.0
 */
class Lowercase extends Package
{
	/**
	 * Makes the PSR-0 path fully lowercase
	 *
	 * @param   string  $fullname  full classname
	 * @param   string  $class     classname relative to base/module namespace
	 * @param   string  $basepath
	 * @return  string
	 *
	 * @since  2.0.0
	 */
	public function class_to_path($fullname, $class, $basepath)
	{
		return $basepath.substr(strtolower(parent::class_to_path($fullname, $class, $basepath)), strlen($basepath));
	}
}
