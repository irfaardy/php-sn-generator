<?php
/* 
    Serial Number Generator
	@author: Irfa Ardiansyah <irfa.backend@protonmail.com>
    @version: 1.0
*/
namespace Irfa\SerialNumber\Func;

use Irfa\SerialNumber\Core\SN;

class SerialNumber extends SN
{
    private array $config=[];

    public function generate($json_return = false)
    {
        $sn = new SN($this->config);
        return $sn->generateSN($json_return);
    }

    public function setConfig(array $config)
    {
        $this->config = $config;
        return $this;
    }

}
