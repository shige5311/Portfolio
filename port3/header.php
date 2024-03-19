<!-- ここから外部ファイル化する -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="common/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>架空のドーナツショップ「C.C.Donuts」のショッピングサイト | top</title>
</head>

<body>
<?php error_reporting(0); ?>
<header class="header">
        <!-- ハンバーガーメニュー部分 -->
        <div class="nav">

            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>

            <!-- メニュー -->
            <nav class="nav_content">
                <!-- ドロワーメニューの中身 -->
                <div>
                    <img class="dorower_icon" src="images/header/pchetaerlogo.png" alt="">
                </div>
                <ul class="nav_list">
                    <li class="nav_item"><a href="index.php">TOP</a></li>
                    <li class="nav_item"><a href="product.php">商品一覧</a></li>
                    <li class="nav_item"><a href="#">よくある質問</a></li>
                    <li class="nav_item"><a href="#">問い合わせ</a></li>
                    <li class="nav_item"><a href="#">当サイトのポリシー</a></li>
                </ul>
            </nav>
        </div>
        <div class=top>
            <img class="headericon" src="images/header/pchetaerlogo.png" alt="">
            <a href="login-input.php"><img class="login" src="images/header/logingroup.png" alt=""></a>
            <a href="cart.php"><img class="cart" src="images/header/cartgroup.png" alt=""></a>
        </div>
    </header>
    <main>
    <section class="search">
            <form method="get" action="http://www.google.co.jp/search" target="_blank">
                <div>
                    <input type="image" src="images/header/sort.png" alt="検索する">
                    <input type="text" name="q" value="">
                </div>
                <input type="hidden" name="hl" value="ja">
                <input type="hidden" name="sitesearch" value="#">
            </form>
        </section>
<!-- ここまで外部ファイル化する -->