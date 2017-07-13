<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_20170713_115018 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'test 2';
    }

    public static function sourceClass()
    {
        return '';
    }

    public static function getTime()
    {
        return '20170713_115018';
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