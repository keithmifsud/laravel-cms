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
 * Class HolderType.
 *
 * @package KeithMifsud\Cms\Access\Domain
 */
final class HolderType
{

    /**
     * @var string
     */
    private $holder;

    /**
     * @var string
     */
    private  $typeName;


    /**
     * @var HolderTypeRepository
     */
    private $holderTypeRepository;


    /**
     * @var ValidHolderTypeSpecification
     */
    private $validHolderTypeSpecification;


    /**
     * Initialise access.
     *
     * @param ValidHolderTypeSpecification $validHolderTypeSpecification
     * @param HolderTypeRepository $holderTypeRepository
     */
    public function __construct(
        ValidHolderTypeSpecification $validHolderTypeSpecification,
        HolderTypeRepository $holderTypeRepository
    ) {
        $this->validHolderTypeSpecification = $validHolderTypeSpecification;
        $this->holderTypeRepository = $holderTypeRepository;
    }


    /**
     * Setup new holder of type.
     *
     * @param string $type
     * @param string $username
     * @param string $password
     *
     * @return KeithMifsud\Cms\Contracts\Access\Domain\Holder;
     * @throws InvalidHolderTypeException
     */
    public function newHolderOfType($type, $username, $password)
    {
        $type = $this->constructValidHolderType($type);

        $holder = $type->holder;



        return $holder::setup($username, $password);
    }


    /**
     * Initialise holder type properties if valid type.
     *
     * @param $type
     *
     * @return HolderType
     * @throws InvalidHolderTypeException
     */
    private function constructValidHolderType($type)
    {
        if ($this->isValid($type)) {
            $storedType = $this->holderTypeRepository->getType($type);
            $type = $this;
            $type->typeName = $storedType->name;
            $type->holder = $storedType->className;

            return $type;
        }
        throw new InvalidHolderTypeException('Type: ' . $type);
    }


    /**
     * Check if type is valid.
     *
     * @param $type
     *
     * @return bool
     */
    private function isValid($type)
    {
        return $this->validHolderTypeSpecification->isSatisfiedBy($type);
    }

}