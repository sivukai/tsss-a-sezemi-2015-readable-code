<?php

// 書き込むファイル名を指定
$filename = 'recipe-data.txt';

// ファイルを書き込み可能状態で開く
$handle = fopen($filename, 'w');

// ファイルに"オムライス"という文字列を書き込む
fwrite($handle, "オムライス");

// ファイルの操作を終了する
fclose($handle);

?>
