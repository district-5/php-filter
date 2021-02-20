<?php

/**
 * District5 - Filter
 *
 * @copyright District5
 *
 * @author District5 Digital
 * @link https://www.district5.co.uk
 *
 * @license MIT
 *
 * The above copyright notice and this permission notice shall be included in
 * all licensed copies of the Software.
 */
namespace District5\Filter;

/**
 * An interface for describing a minimum set of function that all filters
 * should expose
 *
 * @author District5
 * @package District5\Filter
 */
interface I
{
	/**
	 * Filters a given value
	 * 
	 * @param mixed $value
	 * 
	 * @return mixed The filtered value
	 */
	public function filter($value);
}