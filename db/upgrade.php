<?php
// This file is part of the Redirect plugin for Moodle - http://moodle.org/
//
// Redirect is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Redirect is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Redirect.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin for Moodle is used to create a redirected link.
 *
 * @package    local_redirect
 * @copyright  2018 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade code for the Redirect local plugin.
 *
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_local_redirect_upgrade($oldversion) {

    // Moodle v3.0.0 release upgrade line.
    // Upgrade steps below.

    return true;
}