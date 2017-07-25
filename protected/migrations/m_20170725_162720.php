<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_20170725_162720 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'Companies registry';
    }

    public static function sourceClass()
    {
        return '';
    }

    public static function getTime()
    {
        return '20170725_162720';
    }

    /**
     * Применение миграции
     */
    public function up()
    {
		$this->createTable('crm_companies')
			->column('id', 'int(10) unsigned')->notNull()->autoIncrement()
			->column('company_type', 'int(10) unsigned')->notNull()
			->column('company_sphere', 'int(10) unsigned')->notNull()
			->column('name', 'string')
			->column('phone', 'string')
			->column('email', 'string')
			->column('email_billing', 'string')
			->column('address', 'text')
			->column('comments', 'text')
			->key('primary')->onColls('id')
			->key('c_type')->withType('foreign')->onColls('company_type')->reference('crm_companies_type', 'id')
			->key('c_sphere')->withType('foreign')->onColls('company_sphere')->reference('crm_companies_sphere', 'id')
			->execute();
    }

    /**
     * Откат миграции
     */
    public function down()
    {
		$this->dropTable('crm_companies')->execute();
    }
}