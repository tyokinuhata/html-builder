<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->title()->text('タイトルです！')->out()
    ->body()
        ->h1()
            ->text('aaa')->br()->text('bbb')->out()
        ->h1()->text('ccc')->append();