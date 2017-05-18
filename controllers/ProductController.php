<?php
/**
 * Created by PhpStorm.
 * User: nefrick
 * Date: 05.05.17
 * Time: 19:35
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id)
    {
        //$id = Yii::$app->request->get('id');

        $product = Product::findOne($id);

        if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет.');

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();

        $this->setMeta('Gillette | ' . $product->name, $product->keywords, $product->description );

        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();

        return $this->render('view', compact('product', 'hits'));
    }
}