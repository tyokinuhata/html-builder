<?php

require_once './HtmlBuilder.php';

$hb = new HtmlBuilder();

$hb->html()->html()->h1()->text('hoge')->h1()->text('piyo')->append();