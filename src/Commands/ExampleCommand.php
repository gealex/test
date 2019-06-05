<?php


namespace SitPHP\Commands\Commands;


use Doubles\Double;
use SitPHP\Commands\Command;
use SitPHP\Commands\Tools\Table\Line;
use SitPHP\Formatters\Formatters\CliFormatter;

class ExampleCommand extends Command
{
    // Define arguments and options
    function prepare(){
        $this->setOptionInfos('size', ['s', 'm', 'l']);
    }

    function handle(){

        $window_height = $this->getRequest()->getOutput()->getWindowHeight();
        echo $window_height;

    }
}