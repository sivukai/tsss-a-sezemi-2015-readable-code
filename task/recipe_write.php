<?php
//ファイル名と書き込む文字列を配列で取得
//配列内の文字列を指定されたファイルに１行ずつ書き込み
function file_write($filename,$array_menu){
	// ファイルを書き込み可能状態で開く
	$handle_write = fopen($filename, 'w');

	for($i=0; $i < count($array_menu);$i++){
		// ファイルにメニュー内の文字列を１行ずつ書き込む
		fwrite($handle_write, ($i+1).",".$array_menu[$i]."\n");
	}
// ファイルの操作を終了する
fclose($handle_write);
}
?>
