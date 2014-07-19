<?php

namespace Plate\Datapoint;

use Plate\Datapoint;

class Boolean extends Datapoint
{
	public function setValue($value){
		return $value ? TRUE : FALSE;
	}

	static function isValidValue($value){
		if(is_bool($value)){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}