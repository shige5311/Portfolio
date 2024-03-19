<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 
	'staff', 'password');
$purchase_id=1;
foreach ($pdo->query('select max(id) from purchase') as $row) {
	$purchase_id=$row['max(id)']+1;
}
$sql=$pdo->prepare('insert into purchase values(?,?)');
if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
	foreach ($_SESSION['products'] as $products_id=>$products) {
		$sql=$pdo->prepare('insert into purchase_detail values(?,?,?)');
		$sql->execute([$purchase_id, $products_id, $products['count']]);
	}
	unset($_SESSION['products']);
	echo '    <nav class="pan">
    <p>
        <a href="index.php">TOP</a>
        ＞
        <a href="cart.php">カート</a>
        ＞
        <a href="cart-show-input2.php">購入確認</a>
		＞
        <a href="cart-show-output.php">購入完了</a>
    </p>
</nav>
';
echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
echo '<h2>ご購入確認</h2>';
	echo '<p>ご購入いただきありがとうございます。</p>';
	echo '<p>今後ともご愛顧の程、宜しくお願いいたします。</p>';
} else {
	echo '購入手続き中にエラーが発生しました。申し訳ございません。';
}
echo'<a href="index.php">TOPページへすすむ</a>';
?>
<?php require 'footer.php'; ?>
