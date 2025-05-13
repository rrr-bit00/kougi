<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Report 04-1</title>
	</head>
	<body>

<p>
<ul>
	<li>$x が与えられたら、以下の繰り返し処理を行い、繰り返しが何回実行されたか出力するプログラムを PHP で完成させなさい。</li>
		<ol>
			<li>x が１でない間、以下繰り返し
				<ol>
					<li>$x を表示</li>
					<li>$x が偶数（ $x % 2 == 0 ) なら、$x を２で割る</li>
					<li>そうでないなら、$x を１増やす</li>
				</ol>
		</ol>
  <li>発展課題：1 から 1000 までの数字のうち、繰り返し回数が最大のものを一つ求めるプログラムを PHP で完成させなさい。</li>
</ul>
</p>

<p>例：x = 123 で開始
<pre>
124
62
31
32
16
8
4
2
実行回数 9
</pre>

	<hr />

<?php

$max = 0;		// 最大回数の記録用
$max_count = 0;

for($i = 1; $i < 1000; $i++)
{
	$x = $i;
	$count = 0;		// 繰り返し回数の記録用

	while( $x != 1 )
	{
		// $x を出力する
//		print("$x<br>\n");
		// $x が奇数なら１増やす。そうでないなら２で割る
		if ( $x % 2 == 1 )
		{
			$x = $x + 1;
		}
		else {
			$x = $x / 2;
		}
		// $count を１個増やす
		$count = $count + 1;
		if ($max_count < $count) {
			$max = $i;
			$max_count = $count;
		}
	}

	print("$i について $count 回まわりました<br>\n");
}
print("$max が $max_count 回まわって最大でした<br>\n")

 ?>


	</body>
</html>
