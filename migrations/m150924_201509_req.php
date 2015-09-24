<?php

use yii\db\Schema;
use yii\db\Migration;

class m150924_201509_req extends Migration
{
    public function up()
    {
        $this->batchInsert('tg_products', ['name','v','kvt','price'], [
            ["Индра 1", 220, 1, 70000],
            ["Индра 2", 220, 2, 100000],
            ["Индра 4", 220, 4, 120000],
            ["Индра 5", 220, 5, 140000],
            ["Индра 10", 220, 10, 270000],
            ["Индра 20", 220, 20, 470000],
            ["Индра 50", 220, 50, 500000],
            ["Метатрон 10", 380, 10, 450000],
            ["Метатрон 20", 380, 20, 900000],
            ["Метатрон 50", 380, 50, 1500000],
            ["Метатрон 100", 380, 100, 4500000],
        ]);
    }

    public function down()
    {
        echo "m150924_201509_req cannot be reverted.\n";

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
