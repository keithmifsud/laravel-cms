<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Test\Access\Domain;

use KeithMifsud\Cms\Access\Domain\User;
use KeithMifsud\Test\CmsTest;

/**
 * Class AccessTest
 *
 * @package KeithMifsud\Test\Access\Domain
 */
class AccessTest extends CmsTest
{

    private $accessHolder;

    public function setup()
    {
        $this->accessHolder = new User();
    }
    public function testAccessHolderHasSystemRoleAccess()
    {

    }

}