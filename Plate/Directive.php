<?php

namespace Plate;

abstract class Directive implements Directive\DirectiveInterface{

	private $text;
	private $tag;
	private $params;
	private $args = array();

	function __construct($tag, $params = array(), $text, $args = array()){
		$this->tag    = $tag;
		$this->params = $params;
		$this->text   = $text;
		$this->args   = $args;
	}

	abstract function run(\Plate\Dataset $data);

	final function getTag(){
		return $this->tag;
	}

	final function getParams(){
		return $this->params;
	}

	final function getArgs(){
		return $this->args;
	}

	final function getText(){
		return $this->text;
	}

}