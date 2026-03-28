<?php
/**
 * Plugin Name: MC Tools
 * Description: A collection of Gutenberg blocks for Minecraft.
 * Version:     0.1.0
 * Author:      Christoph Daum
 * Author URI:  https://apermo.de
 * License:     GPL-2.0-or-later
 * Text Domain: mc-tools
 * Requires at least: 6.2
 * Requires PHP: 8.1
 */

declare(strict_types=1);

namespace Apermo\McTools;

\defined( 'ABSPATH' ) || exit();

require_once __DIR__ . '/vendor/autoload.php';

Plugin::init( __FILE__ );
