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
 * Package loader with Closure that translates classname to a path.
 *
 * @package  Fuel\Core
 *
 * @since  2.0.0
 */
class Closure extends Package
{
	/**
	 * @var  \Closure
	 *
	 * @since  2.0.0
	 */
	protected $loader;

	/**
	 * Uses a closure to translate the classname to a path
	 *
	 * @param   string  $fullname
	 * @param   string  $class
	 * @param   string  $basepath
	 * @return  string
	 *
	 * @since  2.0.0
	 */
	public function class_to_path($fullname, $class, $basepath)
	{
		return call_user_func_array($this->loader, array($fullname, $class, $basepath));
	}

	/**
	 * Set the closure that's used as Loader
	 *
	 * @param   \Closure  $loader
	 * @return  Closure
	 * @throws  \RuntimeException
	 *
	 * @since  2.0.0
	 */
	public function set_loader(\Closure $loader)
	{
		$this->loader = $loader;
		return $this;
	}
}
