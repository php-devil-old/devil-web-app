<?php
namespace app;
use PhpDevil\console\ConsoleApplication;

class Console extends ConsoleApplication
{
    public static function loadDefaultConfig()
    {
        return require __DIR__ . '/config/console.php';
    }
}