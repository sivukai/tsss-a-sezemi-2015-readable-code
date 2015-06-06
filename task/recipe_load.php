<?php
//ファイル名を受け取ってそのファイル内のデータを１行ずつ取得
//配列に格納して返す
function file_load($filename){
	// ファイルを読み込み状態で開く
	$handle = fopen($filename, 'r');
	$obj = array();
	while (!feof($handle)) {
		//ファイルから１行取得
		$recipe_name = fgets($handle);
		//一行ずつ配列に格納
		array_push($obj, $recipe_name);
	}
	fclose($handle);
return $obj; //結果が格納されている配列を返す
}

?>
