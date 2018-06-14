# HTML Builder
PHPでHTMLの組み立てができるライブラリ

### このライブラリを利用する場合

#### インストール

```bash
$ composer require tyokinuhata/html-builder
```

#### サンプルコード

```php
<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->meta('charset', 'utf-8')
        ->title()
            ->text('タイトル')->upstream(2)
    ->body()
        ->h1()
            ->text('見出し')->upstream()
        ->p()
            ->text('本文')->upstream()
        ->input('type', 'text', '@autofocus')
        ->button('type', 'submit')
            ->text('送信')->append();
```

基本的に要素は, `->要素名()`の形式で記述します.  
属性と値を取る要素の場合は, `->要素名('属性', '値')`のように記述します.  
例外として, 値を取らなくて良い属性を記述する場合は, `->要素名('@属性')`のように記述します.

プレーンなテキストを記述する場合は, `->text('テキスト')`のように, 引数に対して描画したいテキストを渡します.

`->upstream()`はその階層を抜ける場合に使用します.  
複数階層抜ける場合は`->upstream(2)`のように, 抜ける階層数を引数に指定します.

`->append()`は出力用のメソッドです.  
必ず最後に付けて下さい.

#### ビルドインサーバの起動

```bash
$ php -S localhost:8000 index.php
```

### このライブラリを開発する場合

#### クローン

```bash
$ git clone https://github.com/tyokinuhata/html-builder.git
```

#### セットアップ

```bash
$ make setup
```

#### ビルドインサーバの起動

```bash
$ make up
```

#### 各ファイルの説明

|ファイル名|説明|
|:--|:--|
|HtmlBuilder|要素とポインタの管理, 各トレイトを呼び出すクラス|
|Root|根本となる要素のトレイト|
|Meta|文書のメタデータ関連のトレイト|
|Section|セクション関連のトレイト|
|Content|コンテンツの分類関連のトレイト|
|Text|テキスト関連のトレイト|
|Embedded|コンテンツの埋め込み関連のトレイト|
|Table|テーブル関連のトレイト|
|Form|フォーム関連のトレイト|

### リンク

[GitHub](https://github.com/tyokinuhata/html-builder)  
[Packagist](https://packagist.org/packages/tyokinuhata/html-builder)