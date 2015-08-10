<?php

use yii\db\Schema;
use yii\db\Migration;

class m150809_205819_create_shop_staff_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('shop_staff', [
            'id' => Schema::TYPE_PK,
            'shop_id' => Schema::TYPE_INTEGER,
            'user_id' => Schema::TYPE_INTEGER,
            'position' => Schema::TYPE_STRING . '(50) NOT NULL',
            'is_owner' => Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT FALSE',
            'is_active' => Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT TRUE',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL DEFAULT NOW()',
            'updated_at' => Schema::TYPE_DATETIME,
            'deleted_at' => Schema::TYPE_DATETIME,
        ]);

        $this->addForeignKey('shop_foreign_key', 'shop_staff', 'shop_id', 'shop', 'id');
        $this->addForeignKey('user_foreign_key', 'shop_staff', 'user_id', 'user', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('shop_foreign_key', 'shop_staff');
        $this->dropForeignKey('user_foreign_key', 'shop_staff');

        $this->dropTable('shop_staff');
    }
}
