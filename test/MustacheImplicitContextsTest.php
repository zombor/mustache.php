<?php

require_once '../Mustache.php';
require_once 'PHPUnit/Framework.php';

class MustacheImplicitContextsTest extends PHPUnit_Framework_TestCase {

	public function testImplicitContexts() {
		$data = array(
			array('variable' => 'foo'),
			array('variable' => 'bar'),
			array('variable' => 'baz'),
		);

		$m1 = new Mustache();
		$this->assertEquals("foo\nbar\nbaz", $m1->render('{{variable}}', $data));
		
		$m2 = new Mustache('<{{variable}}>', $data);
		$this->assertEquals("<foo>\n<bar>\n<baz>", $m1->render());
	}

}