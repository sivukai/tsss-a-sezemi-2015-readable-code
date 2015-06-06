<?php
// 読み込むファイル名を指定
$filename = 'recipe-data.txt';

// ファイルを読み込み状態で開く
$handle = fopen($filename, 'r');

while (!feof($handle)) {
	//ファイルから１行取得
	$recipe_name = fgets($handle);
	echo $recipe_name; //出力
}

?>
