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
    <a href="cart.php">カート</a>
    ＞
    <a href="#">購入確認</a>
	＞
    <a href="creditcard-input.php">カード情報</a>

</p>
</nav>';
echo 'ようこそ',$_SESSION['customers']['name'], '様<br>';
echo '<section>';
echo '<h2>カード情報登録</h2>';
echo '<form action="creditcard-input2.php" method="post">';
echo '<table>';
echo '<tr><td>お名前<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td>カード番号<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="card" value="', $card, '">';
echo '</td></tr>';
echo '                <!-- カード会社の選択 -->
<div class="input">
	<p>カード会社
	<p class="required">(必須)</p>
	</p>
</div>
<div class="input">
	<label for="card_company"><input type="radio" name="card_company" value="JCB" checked> JCB</label>
	<label for="card_company"><input type="radio" name="card_company" value="Visa"> Visa</label>
	<label for="card_company"><input type="radio" name="card_company" value="Mastercard">
		Mastercard</label>
</div>';
echo '</td></tr>';
echo '<tr><td>                <div class="input">
<select id="expiration_month" name="expiration_month" required>
	<!-- 月の選択肢を追加 -->
	<option value="" selected disabled hidden></option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<!-- 他の月の選択肢 ... -->
</select>
<label for="expiration_month">月</label>
<select id="expiration_year" name="expiration_year" required>
	<!-- 年の選択肢を追加 -->
	<option value="" selected disabled hidden></option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="50">50</option>
	<!-- 他の年の選択肢 ... -->
</select>
<label for="expiration_year">年</label>
</div>';
echo '</td></tr>';
echo '<tr><td>セキュリティコード<p class="required">(必須)</p></td><td><br>';
echo '<input type="text" name="securitycode" value="セキュリティコード', $securitycode, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="image" src="images/syousai/bo6.png"
value="入力確認する">';
echo '</form>';
echo '</section>';
?>
<?php require 'footer.php'; ?>