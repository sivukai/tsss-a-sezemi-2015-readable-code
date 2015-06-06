<?php
function file_load($filename){
	// ファイルを読み込み状態で開く
	$handle = fopen($filename, 'r');
	$obj = array();
	while (!feof($handle)) {
		//ファイルから１行取得
		$recipe_name = fgets($handle);
		array_push($obj, $recipe_name);
	}
	fclose($handle);
return $obj;
}

?>
