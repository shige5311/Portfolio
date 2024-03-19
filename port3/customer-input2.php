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
echo '<nav class="pan">
        <p>
            <a href="index.php">TOP</a>
            ＞
            <a href="login-input.php">ログイン</a>
            ＞
            <a href="customer-input.php">会員登録</a>
            ＞
            <a href="customer-input2.php">入力確認</a>
            </p>
    </nav>';
    echo 'ようこそ', $_SESSION['customers']['name'], '様<br>';
    echo '<section>';
echo '<h2>入力確認</h2>';
echo'<form action="customer-output.php" method="post">';
echo '<p>お名前</p>';
echo $_post["name"];
echo '<p>お名前(フリガナ)</p>';
echo $_post["furigana"];
echo '<p>郵便番号<p>';
echo $_post["postcode_a"];
echo $_post["postcode_b"];
echo '<p>住所</p>';
echo $_post["address"];
echo '<p>メールアドレス</p>';
echo $_post["mail"];
echo '<p>メールアドレス確認用</p>';
echo $_post["mail"];
echo '<p>パスワード</p>';
echo $_post["password"];
echo '<p>パスワード確認用</p>';
echo $_post["password"];
echo '<input type="image" src="images/syousai/bo5.png" alt="登録する">';
echo '</form>';
echo '</section>';
?>
<?php require 'footer.php'; ?>