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

unset($_SESSION['products'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>
