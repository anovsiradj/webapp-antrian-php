<?php
/**
* 
* ArrayObject aka AO
* 
* extended SPL with shim-null-coalesce and recursive feature
* 
* @version 20181109,20191001
* @link https://git.gi.co.id/anovsiradj/fw/blob/master/libraries/ao.php
* @see https://github.com/etconsilium/php-recursive-array-object/blob/6609af8aba4876662f5f1aa656f7645e15339bca/src/RecursiveArrayObject.php
* @see https://www.php.net/arrayobject
* 
*/

namespace webapp\libraries;

class ao extends \ArrayObject
{
	public function __construct($data = [])
	{
		parent::__construct($data, \ArrayObject::ARRAY_AS_PROPS);
	}

	public function offsetSet($k,$v)
	{
		if ((is_array($v) || (is_object($v) && $v instanceof \stdClass)) && !($v instanceof self))
			parent::offsetSet($k, (new self($v)));
		else
			parent::offsetSet($k, $v);
	}

	/* fail-safe | anti-error */
	public function offsetGet($k) {
		$v = (parent::offsetExists($k)) ? (parent::offsetGet($k)) : null;
		return $v;
	}

	/* fail-safe | anti-error */
	public function offsetUnset($k) {
		if (parent::offsetExists($k)) parent::offsetUnset($k);
	}
}
