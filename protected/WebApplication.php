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

    /**
     * Путь к директории представлений уровня приложения
     * @return string
     */
    public static function getViewsPath()
    {
        return __DIR__ . '/views';
    }

    /**
     * Подключение дефолтного фронтенд-контроллера и запуск приложения
     * @param array|null $request
     * @return mixed
     */
    public function run(array $request = null)
    {
        require_once __DIR__ . '/controllers/DefaultFrontendController.php';
        return parent::run($request);
    }
}