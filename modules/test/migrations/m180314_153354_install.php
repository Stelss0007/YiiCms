<?php
namespace app\modules\test\migrations;

use yii\db\Migration;

/**
 * Class m180314_153352_install
 *
 * yii migrate --migrationPath=@app/modules/user/migrations
 *
 */
class m180314_153354_install extends Migration
{
    private $table = 'user22';

    public function up()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->notNull(),
            'name' => $this->string(100),
            'password' => $this->string(100)->notNull(),
            'active' => $this->tinyInteger(4),
            'group' => $this->integer(),
            'accessToken' => $this->string(100)->notNull(),
            'authKey' => $this->string(100)->notNull(),
            'lastLoggedInAt' => $this->integer(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
            'createdBy' => $this->integer(),
            'updatedBy' => $this->integer(),
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
            'email' => 'admin@mail.com',
            'name' => 'admin',
            'authKey' => \Yii::$app->security->generateRandomString(),
            'accessToken' => \Yii::$app->security->generateRandomString(),
            'password' => \Yii::$app->getSecurity()->generatePasswordHash('admin'),
            'group' => 1,
            'active' => 1,
            'createdBy' => 0,
            'updatedBy' => 0,
            'createdAt' => time(),
            'updatedAt' => time(),
        ]);
    }
}
