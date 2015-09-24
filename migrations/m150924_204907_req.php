<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_204907_req extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_5.tg_requests CHANGE address point_lat VARCHAR(255);');

        $this->execute('ALTER TABLE galaxysss_5.tg_requests CHANGE point_lat point_lat FLOAT;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD point_lng FLOAT NULL;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD point_address VARCHAR(255) NULL;');
    }

    public function down()
    {
        echo "m150924_204907_req cannot be reverted.\n";

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
