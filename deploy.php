<?php
namespace Deployer;

require 'recipe/common.php';

host('production')
    ->setHostname(getenv('DEPLOYER_HOST'))
    ->setRemoteUser('user') // Modifier selon votre user
    ->setIdentityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '~/app');

task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);
