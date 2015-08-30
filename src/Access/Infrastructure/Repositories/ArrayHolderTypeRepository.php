<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Access\Infrastructure\Repositories;

use KeithMifsud\Cms\Access\Domain\HolderTypeRepository;

/**
 * Class ArrayHolderTypeRepository
 *
 * Array repository for access holder types.
 *
 * @package KeithMifsud\Cms\Access\Infrastructure\Repositories
 */
final class ArrayHolderTypeRepository implements HolderTypeRepository
{
    /**
     * @var array
     */
    public $types = array(
        'user'  => array(
            'name'      =>  'user',
            'className' =>  'KeithMifsud\Cms\Access\Domain\User'
        )
    );


    /**
     * Get all types.
     *
     * @return \stdClass
     */
    public function getAllTypes()
    {
        $types =  json_decode(json_encode($this->types));

        return $types;
    }


    /**
     * Get type if exists.
     *
     * @param string $type
     *
     * @return bool|\stdClass
     */
    public function getType($type)
    {
        foreach ($this->getAllTypes() as $storedType) {
            if ($storedType->name == $type) {
                return (object)($storedType);
            }
        }
        return false;
    }

    private function arrayToObject($array)
    {
        return (object) array_map(__FUNCTION__, $array);
    }

}