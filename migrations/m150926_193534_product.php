<?php

use yii\db\Schema;
use yii\db\Migration;

class m150926_193534_product extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_5.tg_products ADD content VARCHAR(2000) NULL;');
    }

    public function down()
    {
        echo "m150926_193534_product cannot be reverted.\n";

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
