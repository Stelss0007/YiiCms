<?php

use yii\db\Migration;

/**
 * Class m180314_153352_install
 */
class m180314_153353_install extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->notNull(),
            'name' => $this->string(100),
            'password' => $this->string(100)->notNull(),
            'active' => $this->tinyInteger(4),
            'author' => $this->integer(),
            'accessToken' => $this->string(100)->notNull(),
            'authKey' => $this->string(100)->notNull(),
            'lastLoggedInAt' => $this->integer(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
        ]);

        $this->setDefaults();
    }

    public function down()
    {
        $this->dropTable('user');

        return false;
    }

    private function setDefaults()
    {
        $this->insert('user', [
            'email' => 'admin@mail.com',
            'name' => 'admin',
            'password' => '111111',
            'active' => 1,
            'author' => 0,
            'createdAt' => time(),
            'updatedAt' => time(),
        ]);
    }
}
