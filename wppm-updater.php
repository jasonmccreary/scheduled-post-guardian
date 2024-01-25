<?php

require __DIR__ . '/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

function check_for_plugin_updates()
{
    PucFactory::buildUpdateChecker(
        'https://wppm.io/api/bundles/123-49595.json',
        __DIR__ . '/scheduled-post-guardian.php',
        'the-slug-of-slugs'
    );
}

add_action('plugins_loaded', 'check_for_plugin_updates');
