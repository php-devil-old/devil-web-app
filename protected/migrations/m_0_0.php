<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_0_0 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'Migration logging table creation';
    }

    public static function sourceClass()
    {
        return 'PhpDevil\core\modules\migration\models\MigrationLog';
    }

    public static function getTime()
    {
        return '0_0';
    }

    /**
     * Применение миграции
     */
    public function up()
    {
		$this->createTable('phpdevil_migrations')
			->column('id', 'int(10) unsigned')->notNull()->autoIncrement()
			->column('applied', 'timestamp')->notNull()
			->column('name', 'string')
			->column('comment', 'string')->notNull()
			->column('filemtime', 'int(10) unsigned')->notNull()
			->key('primary')->onColls('id')
			->key('applied')->onColls('applied')
			->setTableOption('ENGINE', 'InnoDB')
			->setTableOption('DEFAULT CHARSET', 'utf8')
			->execute();
    }

    /**
     * Откат миграции
     */
    public function down()
    {
		$this->dropTable('phpdevil_migrations')->execute();
    }
}