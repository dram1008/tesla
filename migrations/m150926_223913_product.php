<?php

use yii\db\Schema;
use yii\db\Migration;

class m150926_223913_product extends Migration
{

    public function up()
    {
        $pList = \app\models\Product::query()->all();
        $n = [];
        foreach ($pList as $item) {
            $row = [];
            foreach ($item as $k => $v) {
                $row[] = $v;
            }
            $n[] = $row;
        }
        $pList = $n;
        $rList = \app\models\Request::query()->all();
        $n = [];
        foreach ($rList as $item) {
            $row = [];
            foreach ($item as $k => $v) {
                $row[] = $v;
            }
            $n[] = $row;
        }
        $rList = $n;
        $this->db = 'db_gsss';
        $this->db = \yii\di\Instance::ensure($this->db, \yii\db\Connection::className());
        $this->db->getSchema()->refresh();

        $this->execute('CREATE TABLE `tg_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `point_lat` float DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comment` varchar(2000) DEFAULT NULL,
  `point_lng` float DEFAULT NULL,
  `point_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->execute('CREATE TABLE `tg_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `v` int(11) DEFAULT NULL,
  `kvt` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->batchInsert('tg_products', [
            'id',
            'name',
            'v',
            'kvt',
            'price',
            'content',
            'image',
        ], $pList);
        $this->batchInsert('tg_requests', [
            'id',
            'datetime',
            'product_id',
            'name',
            'email',
            'point_lat',
            'phone',
            'comment',
            'point_lng',
            'point_address',
        ], $rList);
    }

    public function down()
    {
        echo "m150926_223913_product cannot be reverted.\n";

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
