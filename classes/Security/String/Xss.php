<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

namespace Fuel\Core\Security\String;
use Fuel\Kernel\Security\String;

/**
 * htmLawed string cleaner
 *
 * @package  Fuel\Core
 *
 * @since  2.0.0
 */
class Xss extends String\Base
{
	public static function clean($input)
	{
		// Load htmLawed if necessary
		if ( ! function_exists('htmLawed'))
		{
			require _env()->path('core').'resources/vendor/htmlawed/htmLawed.php';
		}

		return htmLawed($input, array('safe' => 1, 'balanced' => 0));
	}
}
