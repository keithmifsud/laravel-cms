<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Access\Domain;

use KeithMifsud\Cms\Contracts\Exception\Exception;

/**
 * Class InvalidHolderTypeException
 *
 * @package KeithMifsud\Cms\Access\Domain
 */
class InvalidHolderTypeException extends \Exception implements Exception
{

}