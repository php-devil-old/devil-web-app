<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_20170712_134407 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'empty migration test';
    }

    public static function sourceClass()
    {
        return '';
    }

    public static function getTime()
    {
        return '20170712_134407';
    }

    /**
     * Применение миграции
     */
    public function up()
    {
		//todo: implement method
    }

    /**
     * Откат миграции
     */
    public function down()
    {
		//todo: implement method
    }
}