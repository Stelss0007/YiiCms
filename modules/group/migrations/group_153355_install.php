<?php

namespace app\modules\group\migrations;

use yii\db\Migration;

/**
 * Class m180314_153352_install
 *
 * yii migrate --migrationPath=@app/modules/group/migrations
 *
 */
class group_153355_install extends Migration
{
    private $table = 'group';

    public function up()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->string(200),
            'active' => $this->tinyInteger(1)->defaultValue('1'),
        ]);

        $this->setDefaults();
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

    private function setDefaults()
    {
        $this->insert($this->table, [
            'name' => 'Незарегистрированные',
            'description' => 'Незарегистрированные либо не авторизированные пользователи',
            'active' => 1,
        ]);

        $this->insert($this->table, [
            'name' => 'Администраторы',
            'description' => 'Администраторы сайта',
            'active' => 1,
        ]);

        $this->insert($this->table, [
            'name' => 'Зарегистрированные',
            'description' => 'Зарегистрированные пользователи',
            'active' => 1,
        ]);

        $this->insert($this->table, [
            'name' => 'Модераторы',
            'description' => 'Модераторы сайта',
            'active' => 1,
        ]);
    }
}
