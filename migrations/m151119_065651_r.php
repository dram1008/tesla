<?php

use yii\db\Schema;
use yii\db\Migration;

class m151119_065651_r extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_1.ts_news RENAME TO galaxysss_1.tg_news;');
    }

    public function down()
    {
        echo "m151119_065651_r cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
