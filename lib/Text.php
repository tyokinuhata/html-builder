<?php

namespace HtmlBuilder;

trait Text
{
    /**
     * br要素を渡します
     * @return $this
     */
    public function br()
    {
        $this->arrayElementInsert('br');
        return $this;
    }

    /**
     * テキストを受け取り, 渡します
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->arrayTextNodeInsert($text);
        return $this;
    }
}