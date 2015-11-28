<?php

/**
 * District5 - Filter
 *
 * @copyright District5
 *
 * @author District5 Digital
 * @link https://www.district5.co.uk
 *
 * @license This software and associated documentation (the "Software") may not be
 * used, copied, modified, distributed, published or licensed to any 3rd party
 * without the written permission of District5 or its author.
 *
 * The above copyright notice and this permission notice shall be included in
 * all licensed copies of the Software.
 *
 */
namespace District5\Filter;

/**
 * I
 *
 * An interface for describing a minimum set of function that all filters
 * should expose
 *
 * @author Mark Morgan <mark.morgan@district5.co.uk>
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