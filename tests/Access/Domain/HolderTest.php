<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Test\Access\Domain;

use KeithMifsud\Test\CmsTest;
use KeithMifsud\Cms\Access\Domain\User;
use KeithMifsud\Cms\Contracts\Access\Domain\Holder;

/**
 * Class HolderTest
 * Tests for Access Holder
 *
 * @package KeithMifsud\Test\Access\Domain
 */
class HolderTest extends CmsTest
{

    private $user;

    public function setup()
    {
        $this->user = new User();
    }

    public function testUserIsInstanceOfHolder()
    {
        $this->assertInstanceOf('KeithMifsud\Cms\Contracts\Access\Domain\Holder', $this->user);
    }
}