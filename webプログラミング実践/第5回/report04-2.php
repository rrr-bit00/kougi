<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Report 04-2</title>
		<link rel="stylesheet" href="lec03.css">
	</head>
	<body>

<ol>
	<li>与えられた $fruits 配列の内容を表形式 table で出力する PHP プログラムを作成しなさい</li>
</ol>

<hr />

<p>出力例</p>
<table>
	<tr><th>フルーツ<th>色</tr>
	<tr><td>apple<td>red</tr>
	<tr><td>orange<td>orange</tr>
	<tr><td>lemon<td>yello</tr>
</table>



<?php
  $fruits = array (
		'apple' => 'red',
		'orange' => 'orange',
		'lemon' => 'yellow'
	);
 ?>

<hr>

<p>現在の $members 配列の中身
<?php
  var_dump($fruits);
 ?>

<p>回答プログラム
<table>
<tr><th>フルーツ<th>色
	<?php
foreach($fruits as $k => $v)
{
		print("<tr><td>$k<td>$v\n");
}
	 ?>
</table>
	</body>
</html>
