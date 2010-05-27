<?php

class ChildContext extends Mustache {
	protected $_templateBase = __DIR__;

	public $parent = array(
		'child' => 'child works',
	);
	
	public $grandparent = array(
		'parent' => array(
			'child' => 'grandchild works',
		),
	);
}