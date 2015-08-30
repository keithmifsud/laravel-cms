<?php
/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Contracts\Access\Domain;

/**
 * Interface Holder
 *
 * Defines the Access Holder's Requirements
 *
 * @package KeithMifsud\Cms\Contracts\Access\Domain
 */
interface Holder
{
    /**
     * Setup a new access holder.
     *
     * @param string $username
     * @param string $password
     *
     * @return mixed
     */
    public static function setup($username, $password);


    /**
     * Get type name.
     *
     * @return string
     */
    public function getTypeName();

}