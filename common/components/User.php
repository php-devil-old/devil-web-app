<?php
namespace common\components;
use PhpDevil\core\components\user\WebUser;

/**
 * Class User
 * Расширение компонента пользователя веб-приложения для управления правами доступа
 * @package common\components
 */
class User extends WebUser
{
    /**
     * Разрешение доступа к административному интерфейсу приложения
     *
     * Проверка доступе переопределена, т.к. при отсутствии прав доступа
     * к панели администрирования модуль все равно должен запуститься на
     * выполнение, чтобы дать возможность зайти под аккаунтом с соответствующими
     * правами доступа
     *
     * (проверка права доступа универсальна для любой панели управления проектом на PHPDevil)
     *
     * @return bool
     */
    public function isAdmin()
    {
        return \Devil::app()->loadModule('admin')->isFrontendAccessAllowed();
    }
}