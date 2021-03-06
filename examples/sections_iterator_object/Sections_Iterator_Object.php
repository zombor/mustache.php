<?php

class Sections_Iterator_Object extends Mustache {
	public $start = "It worked the first time.";

	public function middle() {
		return new Iterator_Object;
	}

	public $final = "Then, surprisingly, it worked the final time.";
}

class Iterator_Object implements Iterator
{
	protected $_position = 0;

	protected $_data = array(
		array('item' => 'And it worked the second time.'),
		array('item' => 'As well as the third.'),
	);

	public function rewind() {
		$this->_position = 0;
	}

	public function current() {
		return $this->_data[$this->_position];
	}

	public function key() {
		return $this->_position;
	}

	public function next() {
		++$this->_position;
	}

	public function valid() {
		return isset($this->_data[$this->_position]);
	}
}