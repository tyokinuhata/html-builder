<?php

namespace HtmlBuilder;

class HtmlBuilder
{
    private $buffer;
    private $pointer;

    public function __construct()
    {
        $this->buffer = [ '<!DOCTYPE html>' ];
        $this->pointer = 1;
    }

    use Insert;
    use Core;
    use Html\Root;
    use Html\Meta;
    use Html\Script;
    use Html\Section;
    use Html\Content;
    use Html\Text;
    use Html\Embedded;
    use Html\Table;
    use Html\Form;
}