<?php
declare(strict_types=1);

/**
 * Extended custom post types for WordPress.
 *
 * @package   ExtendedCPTs
 * @version   3.2.1
 * @author    John Blackbourn <https://johnblackbourn.com>
 * @link      https://github.com/johnbillion/extended-cpts
 * @copyright 2012-2017 John Blackbourn
 * @license   GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/src/extended_cpt.php';
require_once __DIR__ . '/src/extended_cpt_admin.php';
require_once __DIR__ . '/src/extended_taxonomy.php';
require_once __DIR__ . '/src/extended_taxonomy_admin.php';
require_once __DIR__ . '/src/extended_rewrite_testing.php';
require_once __DIR__ . '/src/extended_cpt_rewrite_testing.php';
