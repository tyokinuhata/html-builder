<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->meta('charset', 'utf-8')
        ->title()
            ->text('タイトル')->out(2)
    ->body()
        ->h1()
            ->text('見出し')->out()
        ->p()
            ->text('本文')->append();