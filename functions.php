<?php

require_once plugin_dir_path(__FILE__) . 'src/classes/Config.php';
require_once plugin_dir_path(__FILE__) . 'src/classes/Helpers.php';
require_once plugin_dir_path(__FILE__) . 'src/classes/JsonManifest.php';
require_once plugin_dir_path(__FILE__) . 'src/classes/Assets.php';
require_once plugin_dir_path(__FILE__) . 'src/classes/ShortcodeExample.php';

use D3\Plugin;
use D3\Plugin\JsonManifest;
use D3\Plugin\Config;
use D3\Plugin\Assets;
use D3\Plugin\ShortcodeExample;

add_action('init', function () {
	$paths = [
		'dir.theme' => get_template_directory()
	];

	$manifest = new JsonManifest("{$paths['dir.theme']}dist/assets.json", "{$paths['uri.plugin']}/dist");
	Config::setManifest($manifest);

	Assets::init($manifest);
	ShortcodeExample::init();
});
