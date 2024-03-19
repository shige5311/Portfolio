<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
    echo '    <nav class="pan">
    <p>
        <a href="index.php">TOP</a>
        ＞
        <a href="cart.php">カート</a>
        ＞
        <a href="cart-show.php">購入確認</a>
    </p>
</nav>
';
if (!isset($_SESSION['customer'])) {
	echo '購入手続きを行うにはログインしてください。';
} else 
if (empty($_SESSION['product'])) {
	echo 'カートに商品がありません。';
} else {

echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
echo '<h2>ご購入確認</h2>';
echo'<form action="cart-show-input2.php" method="post">';
require 'cart.php';
	echo '<p>お名前：', $_SESSION['customer']['name'], '</p>';
	echo '<p>ご住所：', $_SESSION['customer']['address'], '</p>';
    echo '<p>お支払い方法</p>';
    echo '<input type="image" src="images/syousai/bo7.png"
    value="カード情報登録する">';
    echo'<p>カード情報登録がまだのお客様はこちらへお進みください。</p>';
    }
echo'</form>';

?>
<?php require 'footer.php'; ?>