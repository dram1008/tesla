<?php

namespace app\models\Form;

use cs\base\BaseForm;
use cs\base\DbRecord;

class Product extends BaseForm
{
    const TABLE = 'tg_products';

    public $id;
    public $name;
    public $v;
    public $kvt;
    public $price;

    public function __construct($config = [])
    {
        self::$fields = [
            [
                'name', 'Название', 1, 'string'
            ],
            [
                'v', 'Напряжение', 1, 'integer'
            ],
            [
                'kvt', 'Мощность', 1, 'integer'
            ],
            [
                'price', 'Цена', 0, 'integer'
            ],
        ];
        parent::__construct($config);
    }
}
