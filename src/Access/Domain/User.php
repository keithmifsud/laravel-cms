<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Access\Domain;

use KeithMifsud\Cms\Contracts\Access\Domain\Holder;


final class User implements Holder
{

    const HOLDER_TYPE = 'user';

    /**
     * @var
     */
    private $websiteId;

    private $username;

    private $password;

    private function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public static function setup($username, $password)
    {
        return new User($username, $password);
    }


    /**
     * Get type name
     *
     * @return string
     */
    public function getTypeName()
    {
        return self::HOLDER_TYPE;
    }
}