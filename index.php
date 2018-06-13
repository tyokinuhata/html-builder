<?php

require_once 'vendor/autoload.php';

$hb = new HtmlBuilder\HtmlBuilder();

$hb
->html()
    ->head()
        ->meta('charset', 'utf-8')
        ->title()
            ->text('タイトルです！')->out(2)
    ->body()->append();