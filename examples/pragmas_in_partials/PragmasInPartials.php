<?php

class PragmasInPartials extends Mustache {
	protected $_templateBase = __DIR__;

	public $say = '< RAWR!! >';
	protected $_partials = array(
		'dinosaur' => '{{say}}'
	);
}