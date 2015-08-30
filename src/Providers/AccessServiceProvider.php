<?php

/**
 * This file is part of CMS
 * a multi site content management system for Laravel
 *
 * @licence MIT
 * @author Keith Mifsud <http://www.keith-mifsud.com>
 */

namespace KeithMifsud\Cms\Providers;

use Illuminate\Support\ServiceProvider;
use KeithMifsud\Cms\Access\Domain\Access;


/**
 * Class AccessServiceProvider
 *
 * Service Provider for the Access Module
 *
 * @package KeithMifsud\Cms\Providers
 */
class AccessServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerDomainProviders();
        $this->bindDomainContracts();
    }

    public function registerDomainProviders()
    {
        $this->app->register(
            'KeithMifsud\Cms\Access\Providers\Domain\HolderTypeServiceProvider'
        );
    }



    /**
     * Binds the Domain Contracts with the
     * package's Domain.
     *
     */
    public function bindDomainContracts()
    {
        $this->app->bind('KeithMifsud\Cms\Contracts\Access\Domain\Access', function($app) {
           return new Access(
               $this->app->make('KeithMifsud\Cms\Access\Domain\HolderType')
           );
        });
    }
}