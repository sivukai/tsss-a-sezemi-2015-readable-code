## spec3: 文字列"オムライス"をテキストに出力

### 実際のコード

https://github.com/tsss-a/tsss-a-sezemi-2015-readable-code/blob/master/task/recipe.php


```php
// 書き込むファイル名を指定
$filename = 'recipe-data.txt';

// ファイルを書き込み可能状態で開く
$handle = fopen($filename, 'w');

// ファイルに"オムライス"という文字列を書き込む
fwrite($handle, "オムライス");

// ファイルの操作を終了する
fclose($handle);
```

### どうしてリーダブルだと思っているかの説明

変数名について、書き込むファイル名を変数に格納することで、1度しか使わないとしても、その時のコードの長さを短くすることができる。

こうするより…

```php
$handle = fopen('recipe-data.txt', 'w');
```

こうする方がいい(?)

```php
$filename = 'recipe-data.txt';
$handle = fopen($filename, 'w');
```

### この書き方の一言説明

1度しか使わない文字列も変数に格納

### 実際のコード

```php
// 読み込むファイル名を指定
$handle = 'recipe-data.txt';
```

### どうしてリーダブルだと思っているかの説明
変数名が明示的で素敵

### この書き方の一言説明
名前がシャープ！

## 実際のコード
コードというよりファイル構成

### どうしてリーダブルだと思っているかの説明
一つの実行ファイルには基本的に一つの機能しか持たせないことでコードの可読性を向上させられるのではないかと思っている
あとどこでエラーが起きているかわかりやすい

## この書き方の一言説明
DRY!!


