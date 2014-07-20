<?php
namespace Plate\Datapoint;

use Plate\Datapoint;

class Loopable extends Datapoint
{
    
    public function processForTemplate($text = "", $params = array()) {
        
        $buffer = "";
        
        $plate = new \Plate\Parser();
        
        foreach ($this->getValue() as $item) {
            $plate->setData($item);
            $plate->setTemplate($text);
            $plate->parse();
            $buffer.= $plate->getBuffer();
        }
        
        return $buffer;
    }
}
