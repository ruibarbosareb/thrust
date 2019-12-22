<?php

namespace Rebortec\Thrust\Fields;

class Percentage extends Decimal
{
    public function displayInIndex($object)
    {
        return $this->getValue($object) . ' %';
    }
}
