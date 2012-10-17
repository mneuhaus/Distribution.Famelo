<?php
use \TYPO3\Surf\Domain\Model\Workflow;
use \TYPO3\Surf\Domain\Model\Node;
use \TYPO3\Surf\Domain\Model\SimpleWorkflow;

$application = new \Famelo\Surf\SharedHosting\Application\Flow();
$application->setOption('repositoryUrl', 'git@github.com:mneuhaus/Distribution.Famelo.git');
$application->setDeploymentPath('/kunden/350350_33330/flow/famelo');
$application->setOption('keepReleases', 20);
$application->setOption('hosting', 'DomainFactory/ManagedHosting');
$application->setOption('defaultContext', 'Production');
$application->setOption('composerCommandPath', '/kunden/350350_33330/composer.phar');

$deployment->addApplication($application);

$workflow = new SimpleWorkflow();

/*
$application->setOption('sitePackageKey', 'TYPO3.PhoenixDemoTypo3Org');
$workflow->addTask('typo3.surf:typo3:importsite', 'migrate', $application);
*/

$deployment->setWorkflow($workflow);

$node = new Node('neos.famelo.com');
$node->setHostname('neos.famelo.com');
$node->setOption('username', 'ssh-350350-famelo');

$application->addNode($node);
$deployment->addApplication($application);
?>