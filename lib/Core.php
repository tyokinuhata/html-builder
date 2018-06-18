<?php

namespace HtmlBuilder;

trait Core
{
    /**
     * ポインタをn階層上へ戻します
     * @param int $depth
     * @return $this
     */
    public function upstream($depth = 1)
    {
        $this->pointer += $depth;
        return $this;
    }

    /**
     * dev: 開発者モード
     * prod: プロダクトモード
     * min: プロダクトモード(ミニファイ)
     * で出力します
     * @param $mode
     */
    public function append($mode = 'min')
    {
        if ($mode === 'dev')
        {
            var_dump($this->buffer);
        }
        else if ($mode === 'prod')
        {
            // TODO: 実装
        }
        else if ($mode === 'min')
        {
            echo implode('', $this->buffer);
        }
    }

    /**
     * 任意のパスに任意の名前のhtmlファイルを生成します
     * @param $path
     */
    public function build($path)
    {
        $fileName = $path . '.html';
        if (!file_exists($fileName))
        {
            touch($fileName);
        }
        file_put_contents($fileName, $this->buffer);
    }
}