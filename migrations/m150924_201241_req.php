<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_201241_req extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_5.tg_requests CHANGE produc_id product_id INT;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD name VARCHAR(255) NULL;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD email VARCHAR(255) NULL;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD address VARCHAR(255) NULL;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD phone VARCHAR(255) NULL;');
        $this->execute('ALTER TABLE galaxysss_5.tg_requests ADD comment VARCHAR(2000) NULL;');
    }

    public function down()
    {
        echo "m150924_201241_req cannot be reverted.\n";

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
