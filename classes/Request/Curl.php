<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

namespace Fuel\Core\Request;
use Classes\Request\Base;

/**
 * Request class for executing cURL requests.
 *
 * @package  Fuel\Core
 *
 * @since  1.1.0
 */
class Curl extends Base
{
	/**
	 * @var  string  URL to serve as the resource for the CURL request
	 *
	 * @since  1.1.0
	 */
	protected $resource = '';

	/**
	 * @var  array  of HTTP request headers
	 *
	 * @since  1.1.0
	 */
	protected $headers = array();

	/**
	 * @var  string  HTTP request method
	 *
	 * @since  1.1.0
	 */
	protected $method = 'GET';

	/**
	 * @var  array  HTTP request method variables
	 *
	 * @since  1.1.0
	 */
	protected $request_vars = array();

	/**
	 * Constructor
	 *
	 * @param  string  $resource
	 * @param  array   $options
	 *
	 * @since  1.1.0
	 */
	public function __construct($resource, array $options = array())
	{
		! is_array($resource) and $options['resource'] = $resource;

		foreach ($options as $var => $setting)
		{
			if (method_exists($this, $method = 'set_'.$var))
			{
				$this->{$method}($setting);
			}
			elseif (property_exists($this, $var))
			{
				$this->{$var} = $setting;
			}
		}
	}

	/**
	 * Executes the cURL request
	 *
	 * @return  Curl
	 *
	 * @since  1.1.0
	 */
	public function execute()
	{
		$this->activate();

		// $this->response = ;

		$this->deactivate();
		return $this;
	}
}
