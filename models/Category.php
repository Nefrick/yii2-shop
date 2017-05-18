<?php
/**
 * Created by PhpStorm.
 * User: nefrick
 * Date: 04.05.17
 * Time: 17:48
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}