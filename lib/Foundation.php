<?php

namespace HtmlBuilder;

trait Foundation
{
    /**
     * html要素を渡します
     * @param string $attribute
     * @param string $value
     * @return $this
     */
    public function html($attribute = 'lang', $value = 'en')
    {
        $this->arrayElementsInsert('html', $attribute, $value);
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
        $this->arrayElementsInsert('br');
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