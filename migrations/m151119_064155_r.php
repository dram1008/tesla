<?php

use yii\db\Schema;
use yii\db\Migration;

class m151119_064155_r extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `ts_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) DEFAULT NULL,
  `sort_index` int(11) DEFAULT NULL,
  `content` text,
  `date_insert` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  `id_string` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `view_counter` int(11) NOT NULL DEFAULT \'0\',
  `description` varchar(1000) DEFAULT NULL,
  `is_added_site_update` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_string` (`id_string`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m151119_064155_r cannot be reverted.\n";

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
