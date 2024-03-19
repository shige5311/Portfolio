<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
$id=$name=$furigana=$postcode_a=$postcode_b=$address=$mail=$password='';
if (isset($_SESSION['customers'])) {
	$id=$_SESSION['customers']['id'];
	$name=$_SESSION['customers']['name'];
	$furigana=$_SESSION['customers']['furigana'];
	$postcode_a=$_SESSION['customers']['postcode_a'];
	$postcode_b=$_SESSION['customers']['postcode_b'];
	$address=$_SESSION['customers']['address'];
	$mail=$_SESSION['customers']['mail'];
	$password=$_SESSION['customers']['password'];
}
echo '        <nav class="pan">
<p>
    <a href="index.php">TOP</a>
    ＞
    <a href="cart.php">カート</a>
    ＞
    <a href="#">購入確認</a>
    ＞
    <a href="creditcard-input.php">カード情報</a>
    ＞
    <a href="creditcard-input2.php">情報確認</a>
</p>
</nav>';
    // 仮 
echo 'ようこそ',$_SESSION['customer']['name'], '様<br>';
echo '<section>';
echo '<h2>入力情報確認</h2>';
echo'<form action="creditcard-output.php" method="post">';
echo '<p>お名前</p>';
echo $_post["name"];
echo '<p>カード番号</p>';
echo $_post["card"];
echo '<p>カード会社<p>';
echo $_post["card_company"];
echo '<p>有効期限</p>';
echo $_post["expiration_month"];
echo '月';
echo $_post["expiration_year"];
echo '年';
echo '<p>セキュリティコード</p>';
echo $_post["securitycode"];
echo '<input type="image" src="images/syousai/bo6.png" alt="登録する">';
echo '</form>';
echo '</section>';
?>
<?php require 'footer.php'; ?>