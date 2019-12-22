<?php

namespace Rebortec\Thrust\Fields;

class HtmlField extends TextArea
{
    public function getValue($object)
    {
        return $object->{$this->field};
    }
}
