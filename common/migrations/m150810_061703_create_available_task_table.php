<?php

use yii\db\Schema;
use yii\db\Migration;

class m150810_061703_create_available_task_table extends Migration
{
    public function up()
    {
        $this->createTable('available_task', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT
        ]);
    }

    public function down()
    {
        $this->dropTable('available_task');
    }
}
