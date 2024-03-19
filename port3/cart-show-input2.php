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
echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
echo '<h2>ご購入確認</h2>';
echo'<form action="cart-show-output.php" method="post">';
require 'cart.php';
require 'creditcard-input2.php';
echo '<input type="image" src="images/syousai/bo8.png"
value="購入を確認する">';
echo'<p>カード情報登録がまだのお客様はこちらへお進みください。</p>';
echo'</form>';

?>
<?php require 'footer.php'; ?>
