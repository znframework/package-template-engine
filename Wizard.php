<?php namespace ZN\TemplateEngine;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Config;
use ZN\Wizard as Wiz;

class Wizard
{
    /**
     * Get config
     * 
     * @var array
     */
    protected static $config;

    /**
     * Get data.
     * 
     * @param string $file
     * @param array  $data = []
     * 
     * @return string
     */
    public static function file(string $file, array $data = []) : string
    {
        PHPElementIsolator::file($file);

        return Wiz::data
        (
            FileBuffering::file($file, $data), 
            $data, 
            Config::default('ZN\TemplateEngine\TemplateEngineDefaultConfiguration')
                  ::get('ViewObjects', 'wizard')
        );
    }
}
