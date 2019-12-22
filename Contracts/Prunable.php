<?php

namespace Rebortec\Thrust\Contracts;

/**
 * It means the filed can have something attached that can be deleted when the resource is deleted
 * Interface Prunable
 * @package Rebortec\Thrust\Contracts
 */
interface Prunable
{
    public function prune($object);
}
