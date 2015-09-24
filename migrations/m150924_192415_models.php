<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_192415_models extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `tg_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) DEFAULT NULL,
  `v` int(11) DEFAULT NULL,
  `kvt` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m150924_192415_models cannot be reverted.\n";

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
