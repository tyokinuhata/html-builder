# HTML Builder
PHPでHTMLの組み立てができるライブラリ

### 利用者向け

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
        ->input('type', 'text')
        ->button('type', 'submit')
            ->text('送信')->append();
```

#### ビルドインサーバの起動

```bash
$ php -S localhost:8000 index.php
```

### 開発者向け

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