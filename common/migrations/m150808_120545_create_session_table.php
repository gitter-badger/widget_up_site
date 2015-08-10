<?php

use yii\db\Schema;
use yii\db\Migration;

class m150808_120545_create_session_table extends Migration
{
    public function up()
    {
        $this->createTable('session', [
            'id' => Schema::TYPE_STRING . ' NOT NULL PRIMARY KEY',
            'expire' => Schema::TYPE_INTEGER,
            'data' => Schema::TYPE_BINARY
        ]);
    }

    public function down()
    {
        $this->dropTable('session');
    }
}
