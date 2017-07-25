<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_20170725_152349 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'types of companies table';
    }

    public static function sourceClass()
    {
        return '';
    }

    public static function getTime()
    {
        return '20170725_152349';
    }

    /**
     * Применение миграции
     */
    public function up()
    {
		$this->createTable('crm_companies_type')
			->column('id', 'int(10) unsigned')->notNull()->autoIncrement()
			->column('name', 'string')
			->key('primary')->onColls('id')
			->execute();
    }

    /**
     * Откат миграции
     */
    public function down()
    {
		$this->dropTable('crm_companies_type')->execute();
    }
}