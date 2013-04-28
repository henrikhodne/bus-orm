<?php
namespace Bus\Component\Orm\Tests;

use Bus\Component\Orm\Hello;

class HelloTest extends \PHPUnit_Framework_TestCase {

	public function testBar() {
		$object = new Hello();
		self::assertEquals('bar', $object->bar());
	}
}
