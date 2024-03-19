<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
unset($_SESSION['customers']);
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'staff', 'password');
$sql = $pdo->prepare('select * from customers where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customers'] = [
        'id' => $row['id'], 'name' => $row['name'],
        'furigana' => $row['furigana'], 'postcode_a' => $row['postcode_a'],
        'postcode_b' => $row['postcode_b'], 'address' => $row['address'],
        'mail' => $row['mail'], 'password' => $row['password']
    ];
}
if (isset($_SESSION['customers'])) {
    echo '<nav class="pan">
        <p>
            <a href="index.php">TOP</a>
            ＞
            <a href="login-input.php">ログイン</a>
            ＞
            <a href="login-output.php">ログイン完了</a>
        </p>
    </nav>';

    echo $_SESSION['customers']['name'], '様<br>';
    echo '<h2>ログイン完了</h2>';
    echo '<div class="completed">';
    echo '<p>ログインが完了しました。<br>引き続きお楽しみください。</p>';
    echo '</div>';
    echo '<a class="cart-" href="cart.php"><p>購入確認ページへすすむ</p></a>';
    echo '<a class="top-" href="index.php"><p>TOPページへもどる</p></a>';
    echo '<a href="logout.php"><p>ログアウト</p></a>';
} else {
    echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require 'footer.php'; ?>
