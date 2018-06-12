<?php

require_once './HtmlBuilder.php';

$hb = new HtmlBuilder();

$hb
->html()
    ->head()
        ->title()->text('タイトルです！')
    ->body()
        ->h1()->text('本文です！')->append();