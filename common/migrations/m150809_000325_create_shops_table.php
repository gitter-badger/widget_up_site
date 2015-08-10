<?php

use yii\db\Schema;
use yii\db\Migration;

class m150809_000325_create_shops_table extends Migration
{

    public function up()
    {
        $this->createTable('shop', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(50) NOT NULL',
            'url' => Schema::TYPE_STRING . '(100) NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL DEFAULT NOW()',
            'updated_at' => Schema::TYPE_DATETIME,
            'deleted_at' => Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        $this->dropTable('shop');
    }
}
