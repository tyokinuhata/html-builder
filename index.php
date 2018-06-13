<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html('lang', 'ja')
    ->head()
        ->title()->text('タイトルです！')->out()
    ->body()
        ->br()->br()->br()
        ->h1()->text('h1です！')
        ->h2()->text('h2です！')
        ->h3()->text('h3です！')
        ->h4()->text('h4です！')
        ->h5()->text('h5です！')
        ->h6()->text('h6です！')->append();