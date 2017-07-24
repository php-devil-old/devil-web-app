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
        return 'Developer account creation';
    }

    public static function sourceClass()
    {
        return \WebWizardry\DevilModules\user\models\Idenity::class;
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
		$idenity = (static::sourceClass())::model();
		$idenity->attributes = [
		    'email'        => 'admin@example.com',
            'password'     => 'admin',
            'default_role' => \WebWizardry\DevilModules\user\models\Idenity::ROLE_ADMIN,
        ];
		$idenity->save();
    }

    /**
     * Откат миграции
     */
    public function down()
    {
		// при откате миграции запись не удаляем
    }
}