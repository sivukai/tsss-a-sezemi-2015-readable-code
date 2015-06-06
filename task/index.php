<?php
require_once "recipe_load.php";
require_once "recipe_write.php";

$filename = 'recipe-data.txt'; //ファイル名を指定
$array_menu = array("オムライス","杏仁豆腐","親子丼"); //書き込むメニューを格納(追加する場合はこの配列に追加)
file_write($filename,$array_menu); //ファイルに書き出し
$menu_array = file_load($filename); //ファイル読み込み

//--------------課題6用なので使わない--------------------------------
// //コンソールで値を取得
// echo "メニューIDを指定してください(1~3)：";
// $line = trim(fgets(STDIN));
// //デフォルトはString型なのでINT型に変換
// $line_value = intval($line);
//----------------------------------------------------------------

for ($i=0; $i < count($menu_array); $i++) {
	echo $menu_array[$i]; //出力
}

?>
