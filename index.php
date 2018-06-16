<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->meta('charset', 'utf-8')
        ->title()
            ->text('タイトル')->upstream()
        ->style([
            '#title' => [
                'color' => 'white',
                'background' => 'red'
            ],
            '#content' => [
                'color' => 'green',
                'background' => 'blue'
            ]
        ])->upstream()
    ->body()
        ->h1('id', 'title')
            ->text('見出し')->upstream()
        ->p('id', 'content')
            ->text('本文')->upstream()
        ->input('type', 'text', '@autofocus')
        ->button('type', 'submit')
            ->text('送信')->append();