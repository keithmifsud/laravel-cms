<?php
/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Contracts\Access;

/**
 * Interface Domain
 *
 * Contract for the Access Logic (Domain).
 *
 * @package KeithMifsud\Cms\Contracts\Domain
 */
interface Domain
{

    public function newAccess();
}