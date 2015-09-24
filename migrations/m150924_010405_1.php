<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_010405_1 extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `tg_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` int(11) DEFAULT NULL,
  `produc_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m150924_010405_1 cannot be reverted.\n";

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
