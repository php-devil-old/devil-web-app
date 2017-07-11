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
     * @return bool
     */
    public function isAdmin()
    {
        if ($this->getIdenity()) {
            return $this->getIdenity()->isAdmin();
        } else {
            return false;
        }
    }
}