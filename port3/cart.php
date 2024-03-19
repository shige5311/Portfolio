<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
echo '<nav class="pan">
<p>
    <a href="index.php">TOP</a>
    ＞
    <a href="cart.php">カート</a>
    ＞
    <a href="cart-show-input2.php">購入確認</a>
	＞
    <a href="creditcard-input.php">カード情報</a>

</p>
</nav>';
echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';

if (!empty($_SESSION['products'])) {
	echo '<table>';
	echo '<tr><th>商品番号</th><th>商品名</th>';
	echo '<th>価格</th><th>個数</th><th>小計</th><th></th></tr>';
	$total=0;
	foreach ($_SESSION['products'] as $id=>$products) {
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td><a href="detail.php?id=', $id, '">', 
			$products['name'], '</a></td>';
		echo '<td>', $products['price'], '</td>';
		echo '<td>', $products['count'], '</td>';
		$subtotal=$products['price']*$products['count'];
		$total+=$subtotal;
		echo '<td>', $subtotal, '</td>';
		echo '<td><a href="cart-delete.php?id=', $id, '">削除</a></td>';
		echo '</tr>';
	}
	echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total, 
		'</td><td></td></tr>';
	echo '</table>';
} else {
	echo 'カートに商品がありません。';
}
?>
<?php require 'footer.php'; ?>
