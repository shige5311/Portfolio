<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
$id=$_REQUEST['id'];
if (!isset($_SESSION['products'])) {
	$_SESSION['products']=[];
}
$count=0;
if (isset($_SESSION['products'][$id])) {
	$count=$_SESSION['products'][$id]['count'];
}
$_SESSION['products'][$id]=[
	'name'=>$_REQUEST['name'], 
	'price'=>$_REQUEST['price'], 
	'count'=>$count+$_REQUEST['count']
];
echo '<p>カートに商品を追加しました。</p>';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>
