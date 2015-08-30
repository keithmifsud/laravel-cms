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
        $this->bindDomainContract();
    }


    /**
     * Binds the Domain Contract with the
     * package's Domain.
     *
     */
    public function bindDomainContract()
    {
        $this->app->bind('KeithMifsud\Cms\Contracts\Access\Domain', function($app) {
           return new Access();
        });
    }
}