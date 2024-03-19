<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
unset($_SESSION['customers']);
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'staff', 'password');
$sql = $pdo->prepare('select * from customers where name=? and furigana=? and postcode_a=? and postcode_b=? and address=? and password=?');
$sql->execute($_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'], $_REQUEST['address'], [$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customers'] = [
        'id' => $row['id'], 'name' => $row['name'],
        'furigana' => $row['furigana'], 'postcode_a' => $row['postcode_a'],
        'postcode_b' => $row['postcode_b'], 'address' => $row['address'],
        'mail' => $row['mail'], 'password' => $row['password']
    ];
}
if (isset($_SESSION['customers'])) {
    echo '    <nav class="pan">
    <p>
        <a href="index.php">TOP</a>
        ＞
        <a href="cart.php">カート</a>
        ＞
        <a href="cart.php">購入確認</a>
        ＞
        <a href="creditcard-input.php">カード情報</a>
        ＞
        <a href="creditcard-input2.php">情報確認</a>
        ＞
        <a href="creditcard-output.php">登録完了</a>
    </p>
</nav>
';
    echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
    echo '<h2>カード情報登録完了</h2>';
    echo '<div class="completed">';
    echo '<p>
    支払い情報登録が完了しました。<br>
    続けて購入確認ページへお進みください。
</p>';
    echo '</div>';
    echo '<a class="cart-" href="cart.php">
	<p>購入確認ページへすすむ</p>
</a>';
} else {
    echo '入力不備があります。';
}
?>
<?php require 'footer.php'; ?>