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
use KeithMifsud\Cms\Access\Domain\Holder;
use KeithMifsud\Cms\Access\Domain\User;

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
        $this->assertInstanceOf('KeithMifsud\Cms\Access\Domain\Holder', $this->user);
    }
}