<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html()
    ->head()
        ->title()->text('タイトルです！')->out()
    ->body()
        ->h1()->text('本文です！')
        ->h1()->text('本文２です！')->append();