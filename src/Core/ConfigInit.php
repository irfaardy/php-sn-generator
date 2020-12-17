<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\SerialNumber\Core;

class ConfigInit
{
    protected $length;
    protected $segment;
    protected $seperator;
    protected $charset;

    protected function runConfig($config_array=null)
    {
        if(empty($config_array))
        {
            $this->setConfig();
        } else {
            $this->directConfig($config_array);
        }
    }

    private function setConfig()
    {
         if (function_exists('config') and function_exists('app')) {//Load Config For Laravel
            if(!empty(config('irfa.serial_number'))) 
            {
                $this->laravelConfig();
            } else{
                $this->generalConfig();
            }
       } else{//Load Config for Non-Laravel
            $this->generalConfig();
       }
    }
    private function laravelConfig()
    {
        $this->length       = config('irfa.serial_number.length');
        $this->segment      = config('irfa.serial_number.segment');
        $this->seperator    = config('irfa.serial_number.seperator'); 
        $this->charset      = config('irfa.serial_number.charset'); 
    }

    private function generalConfig()
    {
        require dirname(__DIR__, 2)."/config/config.php";

        $this->length       = $config['length'];
        $this->segment      = $config['segment'];
        $this->seperator    = $config['seperator']; 
        $this->charset      = $config['charset']; 
    }

    private function directConfig($arr)
    {
        require dirname(__DIR__, 2)."/config/config.php";

        $this->length       = isset($arr['length']) ? $arr['length']:$config['length'];
        $this->segment      = isset($arr['segment']) ? $arr['segment']:$config['segment'];
        $this->seperator    = isset($arr['seperator']) ? $arr['seperator']:$config['seperator']; 
        $this->charset      = isset($arr['charset']) ? $arr['charset']:$config['charset']; 
    }

}

