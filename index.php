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
 * This plugin for Moodle is used to redirect URLs which have been passed through Moodle filters.
 *
 * @package    local_redirect
 * @copyright  2018 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
require_once('../../config.php');
$context = context_system::instance();
$PAGE->set_context($context);
$url = new moodle_url('/local/redirect/');
$PAGE->set_url($url);
$url = optional_param('url', $CFG->wwwroot, PARAM_RAW);
if(!isloggedin() && !isguestuser()) { 
    $url = str_replace('{sesskey}', sesskey(), $url);
    $url = str_replace('%7Bsesskey%7D', sesskey(), $url);
} else {
    $parts = parse_url($url);
    if(isset($parts['query'])) {
        parse_str($parts['query'], $query);
        if(isset($query['wantsurl'])) {
            $url = $query['wantsurl'];
        }
    }
}
header('Location: ' . $url);
