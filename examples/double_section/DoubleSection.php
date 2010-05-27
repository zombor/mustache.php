<?php

class DoubleSection extends Mustache {
	protected $_templateBase = __DIR__;

	public function t() {
		return true;
	}

	public $two = "second";
}