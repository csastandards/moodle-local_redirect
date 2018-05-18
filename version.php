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
 * Version information for Redirect.
 *
 * @package    local_redirect
 * @copyright  2018 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_redirect';   // To check on upgrade, that module sits in correct place.
$plugin->version   = 2018051800;        // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2014051200;        // Requires Moodle version 2.7.
$plugin->release   = '0.1.0';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->cron      = 0;
