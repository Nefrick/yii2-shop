<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode('Номер заказа №' . $model->id) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            'name',
            'email:email',
            'phone',
            'address',
            [
                    'attribute' => 'status',
                    'value' => !$model->status ? '<span class="text-danger">Активен</span>' : '<span class="text-success">Завершен</span>',
                    'format' => 'html',

            ],
        ],
    ]) ?>
    <?php $items = $model->orderItems; //debug($items); ?>

    <div class="table-responsive cart_info">
        <table class="table table-condensed">
            <thead>
            <tr class="cart_menu">
                <td class="description">Наименование</td>
                <td class="price">Цена</td>
                <td class="quantity">Кол-во</td>
                <td class="total">Total</td>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td class="cart_description">
                        <h4><a href="<?= Url::to(['/product/view', 'id' => $item['product_id']]); ?>"><?= $item['name'] ?></a></h4>
                    </td>
                    <td class="cart_price">
                        <p>$<?= $item['price'] ?></p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <input class="cart_quantity_input" type="text" name="quantity" value="<?= $item['qty_item'] ?>" autocomplete="off" size="2">
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">$<?= $item['sum_item'] ?></p>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</div>
