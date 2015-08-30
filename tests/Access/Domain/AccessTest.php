<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Test\Access\Domain;

use KeithMifsud\Cms\Access\Domain\Access;
use KeithMifsud\Test\CmsTest;
use KeithMifsud\Cms\Access\Domain\User;

/**
 * Class AccessTest
 *
 * @package KeithMifsud\Test\Access\Domain
 */
class AccessTest extends CmsTest
{



    public function setup()
    {
        parent::setup();
    }

    /** @test */
    public function testThatHolderOfValidTypeCanGainAccess()
    {
        $access = $this->app->make('KeithMifsud\Cms\Contracts\Access\Domain\Access');

        $holder = $access->newAccess('username', 'password', 'user');

        $this->assertTrue($holder->getTypeName() == 'user');
    }



}