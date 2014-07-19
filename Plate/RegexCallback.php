<?php

namespace Plate;

class RegexCallback{

	protected $plate;

	function __construct($plate){
		$this->plate = $plate;
	}

	function run($match){

		$directive = Directive\DirectiveFactory::create($match);
		return $directive->run($this->getData());
	}

	public function setData($data){
		$this->plate->setData( $data );
	}

	protected function getData($key = null){
		return $this->plate->getData($key);
	}

	static function regex(){

	}

}

