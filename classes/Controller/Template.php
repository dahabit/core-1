<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

namespace Fuel\Core\Controller;
use Classes\Controller\Base;

/**
 * Template Controller class
 *
 * Controller that auto-loads a template View into a $template property.
 *
 * @package  Fuel\Core
 *
 * @since  1.0.0
 */
class Template extends Base
{
	/**
	 * @var  string|\Fuel\Kernel\View\Viewable
	 *
	 * @since  1.0.0
	 */
	public $template;

	/**
	 * Extend the before() method to make the template Viewable available
	 * in the Controller actions
	 *
	 * @since  1.0.0
	 */
	public function before()
	{
		parent::before();
		$this->template = $this->app->forge('View', $this->template);
	}

	/**
	 * Extend the after() method to assign the template as a response body
	 * when nothing was returned by the action
	 *
	 * @param   \Fuel\Kernel\Response\Responsible  $response
	 * @return  \Fuel\Kernel\Response\Responsible
	 *
	 * @since  1.0.0
	 */
	public function after($response)
	{
		empty($response) and $response = $this->template;
		return parent::after($response);
	}
}
