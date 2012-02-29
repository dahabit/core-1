<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    Fuel\Core
 * @version    2.0.0
 * @license    MIT License
 * @copyright  2010 - 2012 Fuel Development Team
 */

namespace Fuel\Core\Parser;
use Fuel\Kernel\Parser\Parsable;
use dflydev\markdown\MarkdownParser;

/**
 * Parses Markdown templates
 *
 * @package  Fuel\Core
 *
 * @since  1.1.0
 */
class Markdown implements Parsable
{
	public function extension()
	{
		return 'md';
	}

	/**
	 * Returns the Parser lib object
	 *
	 * @return  \dflydev\markdown\MarkdownParser
	 *
	 * @since  1.1.0
	 */
	public static function parser()
	{
		static $parser = null;
		if (is_null($parser))
		{
			$parser = new MarkdownParser();
		}

		return $parser;
	}

	/**
	 * Parses a file using the given variables
	 *
	 * @param   string  $path
	 * @param   array   $data  @todo currently ignored by MD
	 * @return  string
	 *
	 * @since  2.0.0
	 */
	public function parse_file($path, array $data = array())
	{
		return $this->parse_string(file_get_contents($path), $data);
	}

	/**
	 * Parses a given string using the given variables
	 *
	 * @param   string  $string
	 * @param   array   $data  @todo  currently ignored by MD
	 * @return  string
	 *
	 * @since  2.0.0
	 */
	public function parse_string($string, array $data = array())
	{
		return $this->parser()->transform($string);
	}
}
