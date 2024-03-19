<?php session_start();?>
<?php require 'header.php'; ?>
<?php
echo '<nav class="pan">
<p>
    <a href="index.php">TOP</a>
    ＞
    <a href="cart.php">カート</a>
    ＞
    <a href="cart-show-input2.php">購入確認</a>
	＞
    <a href="creditcard-input.php">カード情報</a>

</p>
</nav>';
echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
?>

<h2>商品一覧</h2>

<section class="main_menu">
    <h3>メインメニュー</h3>
    <div class="topranking">
        <div class="top1-3">
            <!-- 商品1 -->
            <dl class="top1">
                <dt><a href="detail1.php"><img src="images/top/do10.png" alt="top1"></a></dt>
                <dd>
                    CCドーナツ 当店オリ<br class="sp">ジナル<br class="pc">
                    （5個入り）
                    <p>税込 ￥1,500</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品2 -->
            <dl class="top2">
                <dt><img src="images/top/do13.png" alt="top2"></dt>
                <dd>
                    チョコレートデライ<br class="sp">ト（5個<br class="pc">
                    入り）
                    <p>税込 ￥1,600</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品3 -->
            <dl class="top3">
                <dt><img src="images/syouhin/do14.png" alt="top3"></dt>
                <dd>
                    キャラメルクリーム<br class="sp">（5個入<br class="pc">
                    り）
                    <p>税込 ￥1,600</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
        </div>
        <div class="top4-6">
            <!-- 商品4 -->
            <dl class="top4">
                <dt><img src="images/syouhin/do15.png" alt="top4"></dt>
                <dd>
                    プレーンクラシック<br class="sp">（5個入<br class="pc">り）
                    <p>税込 ￥1,500</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品5 -->
            <dl class="top5">
                <dt><img src="images/syouhin/do16.png" alt="top5"></dt>
                <dd>
                    【新作】サマーシト<br class="sp">ラス（5<br class="pc">個入り）
                    <p>税込 ￥1,600</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品6 -->
            <dl class="top6">
                <dt><img src="images/top/do15.png" alt="top6"></dt>
                <dd>
                    ストロベリークラッ<br class="sp">シュ5<br class="pc">
                    個入り）
                    <p>税込 ￥1,800</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
        </div>
    </div>
</section>

<section class="variety_menu">
    <h3>バラエティセット</h3>
    <div class="variety">
        <div class="top1-3">
            <!-- 商品7 -->
            <dl class="top1">
                <dt><a href="detail2.php"><img src="images/syouhin/do18.png" alt="top1"></a></dt>
                <dd>
                    フルーツドーナツ<br class="sp">セット（12<br class="pc">個入り）
                    <p> 税込 ￥3,500</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品8 -->
            <dl class="top2">
                <dt><img src="images/syouhin/do19.png" alt="top2"></dt>
                <dd>
                    フルーツドーナツ<br class="sp">セット（14<br class="pc">個入り）
                    <p>税込 ￥4,000</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品9 -->
            <dl class="top3">
                <dt><img src="images/syouhin/do20.png" alt="top3"></dt>
                <dd>
                    ベストセレクション）<br class="sp">ボックス<br class="pc">（4個入り
                    <p>税込 ￥1,200</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
        </div>
        <div class="top4-6">
            <!-- 商品10 -->
            <dl class="top4">
                <dt><img src="images/syouhin/do21.png" alt="top4"></dt>
                <dd>
                    クラッシュ<br class="sp">ボックス（7個入<br class="pc">り）
                    <p>税込 ￥2,400</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品11 -->
            <dl class="top5">
                <dt><img src="images/syouhin/do22.png" alt="top5"></dt>
                <dd>
                    クリームボックス（4<br class="sp">個入<br class="pc">り）
                    <p>税込 ￥1,400</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
            <!-- 商品12 -->
            <dl class="top6">
                <dt><img src="images/syouhin/do23.png" alt="top6"></dt>
                <dd>
                    クリームボックス（9<br class="sp">個入<br class="pc">り）
                    <p>税込 ￥2,800</p>
                </dd>
                <a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>
            </dl>
        </div>
    </div>
</section>

<?php require 'footer.php'; ?>
