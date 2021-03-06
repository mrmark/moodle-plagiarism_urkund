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
 * version.php
 *
 * @package   plagiarism_urkund
 * @author    Dan Marsden <dan@danmarsden.com>
 * @copyright 2011 onwards Dan Marsden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->version = 2014061100;
$plugin->requires = 2014041100.00;
$plugin->cron     = 300; // Only run every 5 minutes.
$plugin->component = 'plagiarism_urkund';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.7.1';
