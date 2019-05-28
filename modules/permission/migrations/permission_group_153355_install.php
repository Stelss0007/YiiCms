<?php

namespace app\modules\permission\migrations;

use yii\db\Migration;

/**
 * Class m180314_153352_install
 *
 * yii migrate --migrationPath=@app/modules/permission/migrations
 *
 */
class permission_group_153355_install extends Migration
{
    private $table = 'permission_group';

    public function up()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'gid' => $this->integer(),
            'weight' => $this->integer(),
            'level' => $this->integer(),
            'pattern' => $this->string(200),
            'description' => $this->string(200),
        ]);

        $this->createIndex(
            'idx-permission_group-gid',
            $this->table,
            'gid'
        );

        $this->createIndex(
            'idx-permission_group-weight',
            $this->table,
            'weight'
        );

        $this->createIndex(
            'idx-permission_group-level',
            $this->table,
            'level'
        );

        $this->createIndex(
            'idx-permission_group-pattern',
            $this->table,
            'pattern'
        );

        $this->setDefaults();
    }

    public function down()
    {
        $this->dropIndex('idx-permission_group-gid', $this->table);
        $this->dropIndex('idx-permission_group-weight', $this->table);
        $this->dropIndex('idx-permission_group-level', $this->table);
        $this->dropIndex('idx-permission_group-pattern', $this->table);

        $this->dropTable($this->table);
    }

    private function setDefaults()
    {
        $this->insert($this->table, [
            'gid' => 1,
            'weight' => 1,
            'level' => 70,
            'pattern' => '.*',
            'description' => 'Права для администраторов системы. Разрешено все',
        ]);

        $this->insert($this->table, [
            'gid' => -1,
            'weight' => 2,
            'level' => 0,
            'pattern' => '.*::admin::.*',
            'description' => 'Запещаем неавторизированым пользователям доступ к админке',
        ]);

        $this->insert($this->table, [
            'gid' => -1,
            'weight' => 3,
            'level' => 20,
            'pattern' => '.*',
            'description' => 'Незарегистрированые/Неавторзированые пользователи могут просматривать всю информацию',
        ]);
    }
}
