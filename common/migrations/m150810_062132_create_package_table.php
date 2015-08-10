<?php

use yii\db\Schema;
use yii\db\Migration;

class m150810_062132_create_package_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('package', [
            'id' => Schema::TYPE_PK,
            'level' => Schema::TYPE_INTEGER . ' NOT NULL',
            'shop_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . '(100)',
            'description' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL DEFAULT NOW()',
            'updated_at' => Schema::TYPE_DATETIME,
            'completed_at' => Schema::TYPE_DATETIME
        ]);

        $this->addForeignKey('shop_foreign_key', 'package', 'shop_id', 'shop', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('shop_foreign_key', 'package');
        $this->dropTable('package');
    }
}
