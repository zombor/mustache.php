<?php

class PragmaElse extends Mustache {
	public $isHat = false;
	
	public function isBat() {
		return !$this->isHat;
	}
}