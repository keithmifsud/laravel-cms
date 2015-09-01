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
 * Interface Domain
 *
 * Contract for the Access Logic (Domain).
 *
 * @package KeithMifsud\Cms\Contracts\Access\Domain
 */
interface Access
{

    /**
     * Setup new Access Holder
     *
     * @param string $username
     * @param string $password
     * @param string|null $type
     *
     * @return Holder
     */
    public function newAccess($username, $password,  $type = null);


    /**
     * Retrieve Access Holder by identifier
     *
     * @param string $identifier
     *
     * @return Holder
     */
    public function retrieveHolderById($identifier);


    /**
     * Modify the Access Holder and their Access
     *
     * @param array $details
     *
     * @return void
     */
    public function modifyHolderDetails(array $details);


    /**
     * Remove Access of Holder
     *
     * @return Holder
     */
    public function removeAccess();


    /**
     * Assign Role to Holder
     *
     * @param string $role
     *
     * @return Holder
     */
    public function assignRoleToHolder($role);


    /**
     * Dissociate Role from Holder
     *
     * @param string $role
     *
     * @return Holder
     */
    public function dissociateRoleFromHolder($role);


    /**
     * Check if Holder has Role
     *
     * @param $role
     *
     * @return bool
     */
    public function hasRole($role);


    /**
     * Check if Holder has permission
     *
     * @param string $permission
     *
     * @return bool
     */
    public function can($permission);


    /**
     * Create a new Role
     *
     * @return Role
     */
    public static function setupNewRole();


    /**
     * Get Role of a specific Website by name
     *
     * @param string $websiteId
     * @param string $name
     *
     * @return Role
     */
    public static function getWebsiteRoleByName($websiteId, $name);


    /**
     * Get Role by Id
     *
     * @param string $identifier
     *
     * @return Role
     */
    public static function getRoleById($identifier);


    /**
     * Change Role's Name
     *
     * @param string $newName
     *
     * @return void
     */
    public function changeNameOfRole($newName);


    /**
     * Delete Role
     *
     * @return Role
     */
    public function removeRole();


    /**
     * Assign permissions to role
     *
     * @param array $permissions
     *
     * @return Role
     */
    public function grantPermissionsToRole(array $permissions);


    /**
     * Deny permissions to role
     *
     * @param array $permissions
     *
     * @return Role
     */
    public function denyPermissionsToRole(array $permissions);


    /**
     * Create a new permission
     *
     * @ToDo
     * @return Permission
     */
    public static function newPermission();


    /**
     * Get permission by identifier
     *
     * @param string $identifier
     *
     * @return Permission
     */
    public static function retrievePermissionById($identifier);


    /**
     * Get permission of a specific website
     *
     * @param string $websiteIdentifier
     * @param string $name
     *
     * @return Permission
     */
    public static function retrieveWebsitePermissionByName($websiteIdentifier, $name);

}