<?php
use PhpDevil\core\modules\migration\components\applier\MigrationExecutable;

class m_20170713_113726 extends MigrationExecutable
{
    /**
     * Комментарий к миграции для сохранения в таблице логирования
     * примененных миграций
     * @return string
     */
    public static function getComment()
    {
        return 'User Idenity Table';
    }

    public static function sourceClass()
    {
        return \WebWizardry\DevilModules\user\models\Idenity::class;
    }

    public static function getTime()
    {
        return '20170713_113726';
    }

    /**
     * Применение миграции
     */
    public function up()
    {
        $this->createTable((static::sourceClass())::tableName())
            ->column('id', 'int(10) unsigned')->notNull()->autoIncrement()
            ->column('default_role', 'int(10) unsigned')->notNull()
            ->column('email', 'string')->notNull()
            ->column('organization', 'int(10) unsigned')
            ->column('pass_hash', 'string')->notNull()
            ->column('auth_key',  'string')
            ->key('primary')->onColls('id')
            ->setTableOption('ENGINE', 'InnoDB')
            ->setTableOption('DEFAULT CHARSET', 'utf8')
            ->execute();
    }

    /**
     * Откат миграции
     */
    public function down()
    {
        $this->dropTable((static::sourceClass())::tableName())->execute();
    }
}