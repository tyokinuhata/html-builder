<?php

namespace HtmlBuilder;

trait Foundation
{
    /**
     * html要素を渡します
     * @param array ...$options
     * @return $this
     */
    public function html(...$options)
    {
        $this->arrayElementsInsert('html', ...$options);
        return $this;
    }

    /**
     * head要素を渡します
     * @return $this
     */
    public function head()
    {
        $this->arrayElementsInsert('head');
        return $this;
    }

    /**
     * body要素を渡します
     * @return $this
     */
    public function body()
    {
        $this->arrayElementsInsert('body');
        return $this;
    }

    /**
     * title要素を渡します
     * @return $this
     */
    public function title()
    {
        $this->arrayElementsInsert('title');
        return $this;
    }

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