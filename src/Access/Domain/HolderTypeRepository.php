<?php
/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Access\Domain;

/**
 * Interface HolderTypeRepository
 *
 * Holder Type Repository Interface
 *
 * @package KeithMifsud\Cms\Access\Domain
 */
interface HolderTypeRepository
{

    /**
     * Get all holder types.
     *
     * @return \stdClass
     */
    public function getAllTypes();


    /**
     * Get type by name.
     *
     * @param string $type
     *
     * @return  bool|\stdClass
     */
    public function getType($type);

    /**
     * Get the name of the default type
     *
     * @return string|bool
     */
    public function getDefaultTypeName();

}