<?php

use yii\db\Migration;

/**
 * Class m180314_153352_install
 */
class m180314_153352_install extends Migration
{
    public function up()
    {
        $this->createTable('theme', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'description' => $this->text(),
            'active' => $this->tinyInteger(4),
            'title' => $this->string(100),
            'version' => $this->string(20),
            'author' => $this->string(60),
            'updatedAt' => $this->integer(),
        ]);

        $this->setDefaults();
    }

    public function down()
    {
        $this->dropTable('theme');

        return false;
    }

    private function setDefaults()
    {
        $this->insert('theme', [
            'name' => 'mytheme',
            'description' => 'My Test Theme',
            'active' => 1,
            'title' => 'MyTheme',
            'version' => '1.0.0.1',
            'author' => 'Ruslan Atamas',
            'updatedAt' => time(),
        ]);
    }
}
