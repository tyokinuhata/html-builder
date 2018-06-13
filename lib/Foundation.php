<?php

namespace HtmlBuilder;

trait Foundation
{
    /**
     * html要素を渡します
     * @return $this
     */
    public function html()
    {
        $this->arrayElementInsert('html');
        return $this;
    }

    /**
     * head要素を渡します
     * @return $this
     */
    public function head()
    {
        $this->arrayElementInsert('head');
        return $this;
    }

    /**
     * body要素を渡します
     * @return $this
     */
    public function body()
    {
        $this->arrayElementInsert('body');
        return $this;
    }

    /**
     * title要素を渡します
     * @return $this
     */
    public function title()
    {
        $this->arrayElementInsert('title');
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