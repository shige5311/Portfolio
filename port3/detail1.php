<?php session_start();?>
<?php require 'header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'staff', 'password');
$sql = $pdo->prepare('select * from products where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
echo '<form action="cart-insert.php" method="post">';
echo '<div class="ccdo1">';
echo '<img class="do1" src="images/syousai/ccdo1.png" alt="">';
			echo'<dl>
                <dt>
                    <p>CCドーナツ 当店オリジナル（5個入り）</p>
                </dt>';
                echo'<dd>
                    当店のオリジナル商品、CCドーナツ<br class="pc">
                    は、サク<br class="sp">サクの食感が特徴のプレーンタ<br class="pc">
                    イプのドーナ<br class="sp">ツです。素材にこだわり、<br class="pc">
                    丁寧に揚げた生地は<br class="sp">軽やかでサクッとし<br class="pc">
                    た食感が楽しめます。一口<br class="sp">食べれば、口<br class="pc">
                    の中に広がる甘くて香ばしい香<br class="sp">りと、口<br class="pc">
                    どけの良い食感が感じられます。
                </dd>';
                echo'<p class="price"> 税込 ￥1,500</p>';
                    echo'<input type="text" name="count" value="">個';
					echo '<input type="hidden" name="id" value="1">';
					echo '<input type="hidden" name="name" value="CCドーナツ 当店オリジナル（5個入り）">';
					echo '<input type="hidden" name="price" value="1500">';				
                    echo'<a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>';
					echo'</dl>';
                    echo'</div>';
                    echo'<form>';
					echo'<p><p><a href="favorite-insert.php?id=', $row['id'], 
					'"><img class="favoritebutton" src="images/syousai/like.png" alt="favoritebutton"></a></p>';
                }
        ?>
<?php require 'footer.php'; ?>
