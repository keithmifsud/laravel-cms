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
 * Class ValidHolderTypeSpecification
 *
 * Specifies a valid access holder type.
 *
 * @package KeithMifsud\Cms\Access\Domain
 */
final class ValidHolderTypeSpecification
{

    /**
     * @var HolderTypeRepository
     */
    private $holderTypeRepository;


    /**
     * Initialise holder type.
     *
     * @param HolderTypeRepository $holderTypeRepository
     */
    public function __construct(HolderTypeRepository $holderTypeRepository)
    {
        $this->holderTypeRepository = $holderTypeRepository;
    }


    /**
     * Check if specification is met.
     *
     * @param string $type
     *
     * @return bool
     */
    public function isSatisfiedBy($type)
    {
        foreach ($this->holderTypeRepository->getAllTypes() as $validType) {
            if ($validType->name == $type) {
                return true;
            }
        }
        return false;
    }

}