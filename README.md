# HTML Builder
PHPでHTMLの組み立てができるライブラリ

#### autoloadの作成

```
$ make setup
```

#### ローカルサーバの起動

```
$ make up
```

#### 各ファイルの説明

|ファイル名|説明|
|:--|:--|
|HtmlBuilder|要素とポインタの管理, 各トレイトを呼び出すクラス|
|Foundation|html, body, head, titleなど, 基礎的な要素の提供を行うトレイト|
|H|h1 ~ h6要素の提供を行うトレイト|