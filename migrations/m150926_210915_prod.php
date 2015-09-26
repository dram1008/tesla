<?php

use yii\db\Schema;
use yii\db\Migration;

class m150926_210915_prod extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_5.tg_products ADD image VARCHAR(255) NULL;');
    }

    public function down()
    {
        echo "m150926_210915_prod cannot be reverted.\n";

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
