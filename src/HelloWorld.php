<?php


namespace ComposerTestNamespace;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class HelloWorld
{
    public function tryLog(string $toSay = "Nothing given") :void
    {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addRecord(Logger::WARNING, $toSay);
    }
}