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
        </p>
    </nav>';
echo 'ようこそ', $_SESSION['customers']['name'], '様<br>';
echo '<section>';
echo '<h2>会員登録</h2>';
echo '<form action="customer-input2.php" method="post">';
echo '<table>';
echo '<tr><td>お名前<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td>お名前(フリガナ)<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="furigana" value="', $furigana, '">';
echo '</td></tr>';
echo '<tr><td>郵便番号<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="postcode_a" value="', $postcode_a, '" maxlength="3"> - <input type="text" name="postcode_b" value="', $postcode_b, '" maxlength="4">';
echo '</td></tr>';
echo '<tr><td>住所<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="address" value="', $address, '">';
echo '</td></tr>';
echo '<tr><td>メールアドレス<p class="required">(必須)</p></td><td><br>';
echo '<input type="email" name="mail" value="', $mail, '">';
echo '</td></tr>';
echo '<tr><td>メールアドレス確認用<p class="required">(必須)</p></td><td><br>';
echo '<input type="email" name="mail" value="', $mail, '">';
echo '</td></tr>';
echo '<tr><td>パスワード<p class="required">(必須)</p><p class="password-requirements">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</p>
</td><td><br>';
echo '<input type="password" name="password" value="', $password, '">';
echo '</td></tr>';
echo '<tr><td>パスワード確認用<p class="required">(必須)</p></td><td><br>';
echo '<input type="password" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="image" src="images/syousai/bo6.png" alt="入力確認する">';
echo '</form>';
echo '</section>';
?>
<?php require 'footer.php'; ?>
