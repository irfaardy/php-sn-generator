<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\SerialNumber\Core;

class SN extends SerialNumberGenerator
{
    private $generated_serial;
    private $serial;

    protected function generateSN($json=false)
    {
    	if($json)
    	{
    		return json_encode(['sn'=>$this->generatingSN()]);
    	}
        return $this->generatingSN();
    }

}
