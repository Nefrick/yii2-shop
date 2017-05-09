<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive cart_info">
        <table class="table table-condensed">
            <thead>
            <tr class="cart_menu">
                <td class="image">Фото</td>
                <td class="description">Наименование</td>
                <td class="price">Цена</td>
                <td class="quantity">Кол-во</td>
                <td class="total">Total</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item): ?>
            <tr>
                <td class="cart_product">
                    <a href=""><?= $item['img'] ?></a>
                </td>
                <td class="cart_description">
                    <h4><a href=""><?= $item['name'] ?></a></h4>
                    <p>Web ID: 1089772</p>
                </td>
                <td class="cart_price">
                    <p>$<?= $item['price'] ?></p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <a class="cart_quantity_up" href=""> + </a>
                        <input class="cart_quantity_input" type="text" name="quantity" value="<?= $item['qty'] ?>" autocomplete="off" size="2">
                        <a class="cart_quantity_down" href=""> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$<?= $item['price'] * $item['qty'] ?></p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete del-item" href=""><i class="fa fa-times"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Итого: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td><?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>
