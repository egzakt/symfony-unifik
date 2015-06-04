<?php

namespace Extend\SystemBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExtendSystemBundle extends Bundle
{
    /**
     * Get Parent
     *
     * @return string
     */
    public function getParent()
    {
        return 'UnifikSystemBundle';
    }
}