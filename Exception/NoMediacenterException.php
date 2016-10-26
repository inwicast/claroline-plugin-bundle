<?php
/**
 * This file is part of the Claroline Connect package
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * Author: Panagiotis TSAVDARIS
 * 
 * Date: 3/24/15
 */

namespace Inwicast\ClarolinePluginBundle\Exception;


class NoMediacenterException extends \RuntimeException
{
    public function __construct($message = "")
    {
        parent::__construct($message);
    }
}