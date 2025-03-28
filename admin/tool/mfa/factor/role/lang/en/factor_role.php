<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings.
 *
 * @package     factor_role
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Roles';
$string['privacy:metadata'] = 'The Roles factor plugin does not store any personal data.';
$string['settings:description'] = 'Select the roles that must use additional factors to authenticate. If this factor is not turned on, all roles will be required to use an additional factor.';
$string['settings:roles'] = 'Non-passing roles';
$string['settings:roles_help'] = 'Select the roles that will not pass this factor. This allows you to force these roles to use other factors to authenticate.';
$string['settings:shortdescription'] = 'Specify which users must use other factors to authenticate, based on their role. Must be combined with other factors.';
$string['summarycondition'] = 'does NOT have any of the following roles assigned in any context: {$a}';
