<?php
/* 
    Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\SerialNumber\Core;

use Hidehalo\Nanoid\Client;

class SerialNumberGenerator extends ConfigInit
{
    private $sn;

    function __construct($config_array=null)
    {
        $this->runConfig($config_array);
    }

    protected function generatingSN()
    {
        for($i=1;$i<=intval($this->segment);$i++)
        {
            $this->sn .= $this->sn()->formattedId($this->charset,intval($this->length)).$this->seperator;
        }

        $sn = $this->sn;
        return rtrim($sn, $this->seperator);
    }

    private function sn()
    {
        $obj = new Client();

        return $obj;
    }
}
