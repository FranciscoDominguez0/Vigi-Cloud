<?php
require 'lib/base.php';
$jsConfig = new \OC\Template\JSConfigHelper(
    \OC::$server->get(\OCP\IL10N::class, 'core'),
    \OC::$server->get(\OCP\Defaults::class),
    \OC::$server->get(\OCP\IAppManager::class),
    \OC::$server->get(\OCP\ISession::class),
    \OC::$server->get(\OCP\IUserSession::class),
    \OC::$server->get(\OCP\IConfig::class),
    \OC::$server->get(\OCP\Group\IManager::class),
    \OC::$server->get(\OC\Authentication\Token\IProvider::class),
    \OC::$server->get(\OCP\AppFramework\Http\IOutput::class)
);
$config = $jsConfig->getConfig();
echo json_encode($config['theme']);
