<?php session_start();?>
<?php require 'header.php'; ?>
<?php
echo '<form action="cart-insert.php" method="post">';
echo '<div class="ccdo1">';
echo '<img class="do1" src="images/syousai/ccdo1.png" alt="">';
			echo'<div class="form">';
			echo'<dl>
                <dt>
                <p>フルーツドーナツセット（12個入り）</p>                </dt>';
                echo'                <dd>
                新鮮で豊かなフルーツをたっぷりと使用<br class="pc">
                した<br class="sp">贅沢な12個入りセットです。この<br class="pc">
                セットに<br class="sp">は、季節の最高のフルーツを厳<br class="pc">
                選し、ドーナ<br class="sp">ツに取り入れました。口に<br class="pc">
                入れた瞬間にフ<br class="sp">ルーツの風味と生地の<br class="pc">
                ハーモニーが広がりま<br class="sp">す。色鮮やかな見<br class="pc">
                た目も魅力の一つです。
            </dd>
';
                echo'<p class="price"> 税込 ￥3,500</p>';
                    echo'<input type="text" name="count" value="">個';
					echo '<input type="hidden" name="id" value="7">';
					echo '<input type="hidden" name="name" value="フルーツドーナツセット（12個入り）">';
					echo '<input type="hidden" name="price" value="3500">';				
                    echo'<a href="#"><img class="cartbotan" src="images/top/cartbotan.png" alt="cartbotan"></a>';
					echo'</dl>';
					echo'</div>';
					echo'<p><p><a href="favorite-insert.php?id=', $row['id'], 
					'"><img class="favoritebutton" src="images/syousai/like.png" alt="favoritebutton"></a></p>';
					echo'</div>';
		?>
<?php require 'footer.php'; ?>
