
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
        <?php foreach ($session['cart'] as $id => $item): ?>
            <tr>
                <td class="cart_description"><h4><?= $item['name'] ?></h4></td>
                <td class="cart_price"><p>$<?= $item['price'] ?></p></td>
                <td class="cart_quantity"><p><?= $item['qty'] ?></p></td>
                <td class="cart_total"> <p class="cart_total_price">$<?= $item['price'] * $item['qty'] ?></p></td>
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
