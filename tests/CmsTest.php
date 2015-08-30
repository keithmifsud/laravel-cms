<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Test;

use Orchestra\Testbench\TestCase;

/**
 * Class CmsTest
 *
 * Parent Class Class
 *
 * @package KeithMifsud\Test
 */
class CmsTest extends TestCase
{

    public function setup()
    {
        parent::setUp();
    }

    public function testTheTest()
    {
        $false = false;

        $this->assertFalse($false);
    }

}