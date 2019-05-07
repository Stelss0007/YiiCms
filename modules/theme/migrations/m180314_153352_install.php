<?php

use yii\db\Migration;

/**
 * Class m180314_153352_install
 */
class m180314_153352_install extends Migration
{
    private $table = 'theme';

    public function up()
    {
        $this->createTable($this->table, [
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
        $this->dropTable($this->table);

        return false;
    }

    private function setDefaults()
    {
        $this->insert($this->table, [
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
