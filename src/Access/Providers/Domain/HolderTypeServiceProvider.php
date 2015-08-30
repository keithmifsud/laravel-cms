<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Access\Providers\Domain;

use Illuminate\Support\ServiceProvider;

use KeithMifsud\Cms\Access\Infrastructure\Repositories\ArrayHolderTypeRepository;

/**
 * Class HolderTypeServiceProvider
 *
 * Holder type repository service provider.
 *
 * @package KeithMifsud\Cms\Access\Providers\Domain
 */
class HolderTypeServiceProvider extends ServiceProvider
{

    /**
     * Bind the repository interface a concrete implementation.
     *
     */
    public function register()
    {
        $this->app->bind('KeithMifsud\Cms\Access\Domain\HolderTypeRepository', function ($app) {
            return new ArrayHolderTypeRepository();
        });
    }

}