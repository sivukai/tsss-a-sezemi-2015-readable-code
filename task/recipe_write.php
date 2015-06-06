<?php
// 書き込むファイル名を指定
$filename = 'recipe-data.txt';

// ファイルを書き込み可能状態で開く
$handle_write = fopen($filename, 'w');
$array_menu = array("オムライス","杏仁豆腐","親子丼");

for($i=0; $i < count($array_menu);$i++){
	// ファイルにメニュー内の文字列を１行ずつ書き込む
	fwrite($handle_write, ($i+1).",".$array_menu[$i]."\n");
}
// ファイルの操作を終了する
fclose($handle_write);

// ファイルを読み込み状態で開く
$handle_load = fopen($filename, 'r');

	while (!feof($handle_load)) {
		//ファイルから１行取得
		$recipe_name = fgets($handle_load);
		echo $recipe_name; //出力
	}
// ファイルの操作を終了する
fclose($handle_load);
?>
