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
use KeithMifsud\Cms\Access\Domain\HolderType;
use KeithMifsud\Test\CmsTest;
use KeithMifsud\Cms\Access\Domain\User;

/**
 * Class AccessTest
 *
 * @package KeithMifsud\Test\Access\Domain
 */
class AccessTest extends CmsTest
{

    /**
     * @var Access
     */
    protected $access;


    /**
     * Test Setup
     */
    public function setup()
    {
        parent::setup();
        $this->access = $this->app->make('KeithMifsud\Cms\Contracts\Access\Domain\Access');
    }


    /** @test */
    public function test_that_holder_of_valid_type_can_gain_access()
    {
        $holder = $this->access->newAccess('username', 'password', 'user');

        $this->assertTrue($holder->getTypeName() == 'user');
    }

    /**
     * @test
     *
     * @expectedException KeithMifsud\Cms\Access\Domain\InvalidHolderTypeException
     */
    public function test_invalid_holder_type_cannot_gain_access()
    {
        $holder = $this->access->newAccess('username', 'password', 'non_existing_type');

        $this->assertFalse($holder->getTypeName() == 'non_existing_type');
    }

    /** @test */
    public function test_default_holder_type_is_assigned_to_new_holder_without_type()
    {
        $holder = $this->access->newAccess('username', 'password');

        $holderType = $this->app->make('KeithMifsud\Cms\Access\Domain\HolderType');

        $this->assertTrue($holder->getTypeName() == $holderType->getDefault());
    }


}