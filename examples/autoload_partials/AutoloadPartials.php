<?php

class AutoloadPartials extends Mustache {
	protected $_templateBase = __DIR__;

	public $title = 'Allies';
	public $list_items = array(
		array('name' => 'Donkey Kong'),
		array('name' => 'Luigi'),
		array('name' => 'Mario'),
		array('name' => 'Peach'),
		array('name' => 'Yoshi'),
	);
}