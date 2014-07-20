<?php
namespace Plate\Directive;

class Plugin extends Directive
{
    
    public function run(Dataset $data) {
        
        if (function_exists($this->getTag())) {
            return call_user_func_array($this->getTag(), array($this->getText(), $this->getParams()));
        }
        
        return FALSE;
    }
}
