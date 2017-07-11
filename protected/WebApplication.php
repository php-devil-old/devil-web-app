<?php
namespace app;
use PhpDevil\web\Application;

/**
 * Class WebApplication
 * Фронт-контроллер веб-приложения
 * @package app
 */
class WebApplication extends Application
{
    /**
     * Пространство имен контроллеров приложения
     * @var string
     */
    protected $controllersNamespace = '\\app\\controllers';

    /**
     * Пространство имен консольных команд
     * @var string
     */
    protected $commandsNamespace = '\\app\\commands';

    /**
     * Загрузка конфигурации компонента по умолчанию
     * @return array
     */
    public static function loadDefaultConfig()
    {
        return require __DIR__ . '/config/application.php';
    }
}