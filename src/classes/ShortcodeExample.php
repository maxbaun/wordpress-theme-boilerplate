<?php

namespace D3\Plugin;

class ShortcodeExample
{
	public static function init()
	{
		add_shortcode('plugin_name_shortcode_name', array('D3\Plugin\ShortcodeExample', 'render'));
	}

	public static function render($args, $content = "")
	{
		ob_start();
		include_once(plugin_dir_path(dirname(__FILE__)) . 'templates/shortcode-example.php');
		$output = ob_get_clean();
		ob_end_clean();

		// output the results
		return force_balance_tags($output);
	}
}
