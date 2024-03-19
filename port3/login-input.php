<?php session_start();?>
<?php require 'header.php'; ?>

<nav class="pan">
        <p>
            <a href="index.php">TOP</a>
            ＞
            <a href="login-input.php">ログイン</a>
        </p>
    </nav>

    <h2>ログイン</h2>
    <!-- 仮ログイン -->

<form action="login-output.php" method="post">
メールアドレス<br>
<input type="mail" name="mail"><br>
パスワード<br>
<input type="password" name="password"><br>
<input type="image" src="images/syousai/bo4.png" alt="ログイン">
</form>
<a href="customer-input.php">会員登録はこちら</a>
<?php require 'footer.php'; ?>