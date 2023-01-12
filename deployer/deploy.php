<?php
namespace Deployer;

/**
 * Deployer's default recipe for deploying Magento2 projects.
 * Can be used for testing and/or as starting pointing for new projects.
 *
 * Remember that while this will deploy the code, you still need to prepare your server properly for Magento2 projects.
 * Check out the Magento documentation for more details: https://devdocs.magento.com/guides/v2.3/install-gde/install-flow-diagram.html
 *
 */
require 'recipe/magento2.php';

/**
 * To avoid hard-coding values, we can use this environment-specific configuration file.
 * Copy/paste the deployer.env.php.sample file, enter the right values, and rename it to deployer.env.php
 *
 */
$configurations = include 'deployer.env.php';

// Config

set('repository', 'git@github.com:ivancukns/magento2-ddev.git');

// Hosts

host($configurations['remote_ip'])
    ->set('remote_user', $configurations['remote_user'])
    ->set('deploy_path', $configurations['deploy_path']);

// Hooks

after('deploy:failed', 'deploy:unlock');
