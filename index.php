<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->title()->text('タイトルです！')->out()
    ->body()
        ->text('aaa')->br()->br()->br()
        ->h1()->h1()->append();